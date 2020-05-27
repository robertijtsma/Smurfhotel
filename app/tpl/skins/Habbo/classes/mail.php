<?php
/**
 * Created by PhpStorm.
 * User: Gustav
 * Date: 2015-07-26
 * Time: 11:54
 */

class mail {

    public $info = array('to', 'subject', 'message', 'from');

    public function __construct($to = null, $subject = null, $message = null, $from = null) {
        $this->info['to'] = $to;
        $this->info['subject'] = $subject;
        $this->info['message'] = $message;
        $this->info['from'] = $from;
    }

    public function send($dbh) {
        $stmt = $dbh->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
        $stmt->bindParam(':id', $this->info['from']);
        $stmt->execute();
        $check = $stmt->fetch();
        if(!$check)
            return 'error';
        else {
            date_default_timezone_set('UTC');
            $stmt = $dbh->prepare('SELECT id FROM users WHERE username = :uName LIMIT 1');
            $stmt->bindParam(':uName', $this->info['to']);
            $stmt->execute();
            $check = $stmt->fetch();
            if(!$check)
                return 'error';
            $this->info['to'] = $check[0];

            $stmt = $dbh->prepare('SELECT * FROM messenger_friendships WHERE user_one_id = :id OR user_two_id = :id2');
            $stmt->bindParam(':id', $this->info['from']);
            $stmt->bindParam(':id2', $this->info['from']);
            $stmt->execute();
            $friends = $stmt->fetchAll();

            $gotFriend = false;
            foreach($friends as $friend) {
                if(($friend[0] == $this->info['from'] && $friend[1] == $this->info['to'] ) || ($friend[0] == $this->info['to'] && $friend[1] == $this->info['from']))
                    $gotFriend = true;
            }
            if(!$gotFriend)
                return 'error';

            $time = date('d-M-Y H:i:s');
            $stmt = $dbh->prepare('INSERT INTO user_mail (sender_id, reciever_id, subject, content, trash, opened, mailed_on) VALUES (:sendID, :recieveID, :subject, :content, 0, 0, :uTime)');
            $stmt->bindParam(':sendID', $this->info['from']);
            $stmt->bindParam(':recieveID', $this->info['to']);
            $stmt->bindParam(':subject', $this->info['subject']);
            $stmt->bindParam(':content', $this->info['message']);
            $stmt->bindParam(':uTime', $time);
            $stmt->execute();
            return true;
         }
    }

    public function delete($type, $id, $dbh) {
        switch($type) {
            case 'inbox':
                if($_SESSION['user']['id'] != null) {
                    $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE id = :id LIMIT 1');
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    $check = $stmt->fetch();
                    if($check['reciever_id'] == $_SESSION['user']['id']) {
                        $stmt = $dbh->prepare('UPDATE user_mail SET trash = 1 WHERE id = :id');
                        $stmt->bindParam(':id', $id);
                        $stmt->execute();
                        return true;
                    }
                }
                return false;
            case 'trash':
                if($_SESSION['user']['id'] != null) {
                    $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE id = :id LIMIT 1');
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    $check = $stmt->fetch();
                    if($check['reciever_id'] == $_SESSION['user']['id']) {
                        $stmt = $dbh->prepare('DELETE FROM user_mail WHERE id = :id');
                        $stmt->bindParam(':id', $id);
                        $stmt->execute();
                        return true;
                    }
                }
                return false;
        }
        return 'Wrong type';
    }

    public function refresh($type, $dbh) {
        switch($type) {
            case 'inbox':
                $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE reciever_id = :id AND trash = 0 AND opened = 0 ORDER BY mailed_on DESC');
                $stmt->bindParam(':id', $_SESSION['user']['id']);
                $stmt->execute();
                $new = $stmt->fetchAll();
                $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE reciever_id = :id AND trash = 0 ORDER BY mailed_on DESC');
                $stmt->bindParam(':id', $_SESSION['user']['id']);
                $stmt->execute();
                $all = $stmt->fetchAll();
                return array($new, $all);
            case 'trash':
                $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE reciever_id = :id AND trash = 1 ORDER BY mailed_on DESC');
                $stmt->bindParam(':id', $_SESSION['user']['id']);
                $stmt->execute();
                $mails = $stmt->fetchAll();
                return $mails;
            case 'sent':
                $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE sender_id = :id ORDER BY mailed_on DESC');
                $stmt->bindParam(':id', $_SESSION['user']['id']);
                $stmt->execute();
                $mails = $stmt->fetchAll();
                return $mails;
            case 'reports':
                $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE reported = 1 ORDER BY mailed_on DESC');
                $stmt->execute();
                $mails = $stmt->fetchAll();
                $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE reported = 1 AND checked = 0 ORDER BY mailed_on DESC');
                $stmt->execute();
                $newMails = $stmt->fetchAll();
                return array($newMails, $mails);
        }
        return array(false);
    }

    public function report($id, $dbh) {
        $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE id = :id AND reciever_id = :rID LIMIT 1');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':rID', $_SESSION['user']['id']);
        $stmt->execute();
        $check = $stmt->fetch();
        if($check != false) {
            $stmt = $dbh->prepare('UPDATE user_mail SET reported = 1 WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return 'success';
        }
        return 'error';
    }

    public function reportViewed($id, $dbh) {
        if($_SESSION['user']['rank'] > 5) {
            $stmt = $dbh->prepare('SELECT * FROM user_mail WHERE id = :id LIMIT 1');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $check = $stmt->fetch();
            if($check != false) {
                $stmt = $dbh->prepare('UPDATE user_mail SET checked = 1 WHERE id = :id');
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return 'success';
            }
        }
        return 'error';
    }
}