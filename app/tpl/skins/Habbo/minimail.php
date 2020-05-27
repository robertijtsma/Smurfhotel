<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>{hotelName} - Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>$.noConflict();</script>
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/mail.js"></script>

    <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
    <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/mail.css" type="text/css">
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
    <script src="{url}/app/tpl/skins/Habbo/scripts/mail/dependencies/awesomplete.js" async></script>
    <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/scripts/mail/dependencies/awesomplete.css" />

    <script type="text/javascript">
        document.habboLoggedIn = true;
        var habboName = "{username}";
        var habboId = {userid};
        var habboReqPath = "";
        var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
        var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
        var habboPartner = "";
        var habboDefaultClientPopupUrl = "{url}/client";
        window.name = "habboMain";
        if (typeof HabboClient != "undefined") {
            HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
            HabboClient.maximizeWindow = true;
        }
    </script>

    <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/personal.css" type="text/css">
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/habboclub.js"></script>

    <!--[if IE 8]>
    <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie8.css" type="text/css">
    <![endif]-->
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie.css" type="text/css"/>
    <![endif]-->
    <!--[if lt IE 7]>
    <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie6.css" type="text/css"/>
    <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/pngfix.js"></script>
    <script type="text/javascript">
        try {
            document.execCommand('BackgroundImageCache', false, true);
        } catch (e) {
        }
    </script>
    <style type="text/css">
        body {
            behavior: url({url}/app/tpl/skins/Habbo/js/csshover.htc);
        }
    </style>
    <![endif]-->
</head>

<body id="home">

<?php
$navigatorID = 1;
require_once('app/tpl/skins/Habbo/includes/header.php');
?>

<?php
$subNavigatorID = 1;
require_once('app/tpl/skins/Habbo/includes/sub_header.php');
?>

<div id="container">

    <div id="content" style="position: relative" class="clearfix">
        <div id="column1" class="column">
            <div class="habblet-container ">
                <div id="new-personal-info"
                     style="background-image:url({url}/app/tpl/skins/Habbo/images/personal_info/hotel_views/htlview_fr.png)">
                    <div class="enter-hotel-btn">
                        <div class="open enter-btn">
                            <a href="{url}/client" target="eac955c8dbc88172421193892a3e98fc7402021a"
                               onclick="HabboClient.openOrFocus(this); return false;">Enter {hotelName} Hotel<i></i></a>
                            <b></b>
                        </div>
                    </div>
                    <div id="habbo-plate"><img src="http://www.habbo.fr/habbo-imaging/avatarimage?figure={figure}.gif"
                                               alt="{username}"></div>
                    <div id="habbo-info">
                        <div id="motto-container" class="clearfix">
                            <strong>{username}:</strong>

                            <div>
                                <span title="What's on your mind today?">{motto}</span>
                            </div>
                        </div>
                        <div id="motto-links" style="display: none"><a href="#" id="motto-cancel">Cancel</a></div>
                    </div>
                    <ul id="link-bar" class="clearfix">
                        <li class="credits"><a href="{url}/credits">{coins}</a> Credits</li>
                        <li class="activitypoints"><a href="{url}/pixels">{activitypoints}</a> Pixels</li>

                        <?php
                        $getOnline = mysql_query("SELECT * FROM users WHERE id = '" . $_SESSION['user']['id'] . "' LIMIT 1");
                        while ($onlineHabbos = mysql_fetch_assoc($getOnline)) {

                            if ($onlineHabbos['rank'] == 1) {
                                echo '<li class="vipclub"><a href="{url}/vip">Free VIP</a></li>';
                            }

                            if ($onlineHabbos['rank'] == 2) {
                                echo '<li class="vipclub"><a href="{url}/vip">Super VIPVIP</a></li>';
                            }

                            if ($onlineHabbos['rank'] > 2) {
                                echo '<li class="vipclub"><a href="{url}/vip">Super VIP</a></li>';
                            }

                        }
                        ?>

                    </ul>
                    <div id="habbo-feed">
                        <ul id="feed-items">
                            <li class="small" id="feed-lastlogin">Last signed in: {lastSignedIn}</li>
                        </ul>

                        <?php
                        $getRandom = mysql_query("SELECT * FROM users WHERE id = '" . $_SESSION['user']['id'] . "' AND rank = '1' LIMIT 1") or die(mysql_error());
                        while ($randomHabbo = mysql_fetch_assoc($getRandom)) {

                            echo '<div id="habbo-feed">
										<ul id="feed-items"> 
											<span class="tab-spacer"></span>
											<li class="contributed" style="background-image: url(\'app/tpl/skins/{skin}/images/vip.gif\') !important; padding-left: 65px; padding-bottom: 15px;">
											Want to help {hotelName}? Purchase Super VIP and receive exclusive benefits like :push and :pull, extra credits and pixels and many more exclusive features!
											<span style="float: right;"><a href="/vip">Purchase Super VIP! &raquo;</a></span></li>
										</ul>
									</div>';

                        }
                        ?>

                    </div>
                    <p class="last"></p>
                </div>
            </div>

            <div class="cbb clearfix blue">
                <?php require 'classes/mail.php';
                include_once 'scripts/config/config.php';
                try {
                    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $uName, $pWord); // Create database connection.
                } catch (PDOException $Exception) {
                    echo $Exception;
                    echo 'Error connecting to the database.';
                }
                $errorMessage = null;

                $mail = new mail();
                $inbox = $mail->refresh('inbox', $dbh);
                $trash = $mail->refresh('trash', $dbh);
                $sent = $mail->refresh('sent', $dbh);
                if ($_SESSION['user']['rank'] > 5)
                    $reports = $mail->refresh('reports', $dbh);
                if (isset($_POST['mail_id_inbox'])) {
                    $status = $mail->delete('inbox', $_POST['mail_id_inbox'], $dbh);
                    if ($status) {
                        $url = @($_SERVER["HTTPS"] != 'on') ? 'http://' . $_SERVER["SERVER_NAME"] : 'https://' . $_SERVER["SERVER_NAME"];
                        $url .= ($_SERVER["SERVER_PORT"] !== 80) ? ":" . $_SERVER["SERVER_PORT"] : "";
                        $url .= $_SERVER["REQUEST_URI"];
                        header('location: ' . $url);
                        return;
                    }
                }
                if (isset($_POST['mail_id_trash'])) {
                    $status = $mail->delete('trash', $_POST['mail_id_trash'], $dbh);
                    if ($status) {
                        $url = @($_SERVER["HTTPS"] != 'on') ? 'http://' . $_SERVER["SERVER_NAME"] : 'https://' . $_SERVER["SERVER_NAME"];
                        $url .= ($_SERVER["SERVER_PORT"] !== 80) ? ":" . $_SERVER["SERVER_PORT"] : "";
                        $url .= $_SERVER["REQUEST_URI"];
                        header('location: ' . $url);
                        return;
                    }
                }
                if (isset($_POST['mail_sent'])) {
                    $to = $_POST['reciever'];
                    $from = $_SESSION['user']['id'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    if (!isset($to))
                        $errorMessage = "You have to choose a user.";
                    if (!isset($from))
                        $errorMessage = "You are not logged in.";
                    if (!isset($subject))
                        $errorMessage = "You need to write a subject.";
                    if (!isset($message))
                        $errorMessage = "You need to write a message.";

                    $to = htmlentities($to, ENT_QUOTES, 'iso-8859-1'); // Prevent XSS
                    $from = htmlentities($from, ENT_QUOTES, 'iso-8859-1'); // Prevent XSS
                    $subject = htmlentities($subject, ENT_QUOTES, 'iso-8859-1'); // Prevent XSS
                    //    $message = htmlentities($message, ENT_QUOTES, 'iso-8859-1'); // Prevent XSS


                    $mail->info['to'] = $to;
                    $mail->info['from'] = $from;
                    $mail->info['subject'] = $subject;
                    $mail->info['message'] = $message;
                    $status = $mail->send($dbh);

                    $url = @($_SERVER["HTTPS"] != 'on') ? 'http://' . $_SERVER["SERVER_NAME"] : 'https://' . $_SERVER["SERVER_NAME"];
                    $url .= ($_SERVER["SERVER_PORT"] !== 80) ? ":" . $_SERVER["SERVER_PORT"] : "";
                    $url .= $_SERVER["REQUEST_URI"];
                    header('location: ' . $url);
                    return;
                }
                ?>
                <h2 class="title">My Messages
                </h2>


                <div id="minimail">
                    <div class="minimail-contents">


                        <a href="#" onclick="return false;" class="new-button compose"><b>Compose</b><i></i></a>

                        <div class="clearfix labels nostandard">
                            <ul class="box-tabs">
                                <li id="inbox" class="selected"><a href="#" onclick="return false;" label="inbox">Inbox
                                        (<?php echo count($inbox[0]); ?>)</a><span
                                        class="tab-spacer"></span>
                                </li>
                                <li id="sent"><a href="#" onclick="return false;" label="sent">Sent</a><span
                                        class="tab-spacer"></span>
                                </li>
                                <li id="trash"><a href="#" onclick="return false;" label="trash">Trash</a><span
                                        class="tab-spacer"></span>
                                </li>
                                <?php
                                if ($_SESSION['user']['rank'] >= 6) { ?>
                                    <li id="staff"><a href="#" onclick="return false;" label="Reports">Reports
                                            (<?php echo count($reports[0]); ?>)</a><span
                                            class="tab-spacer"></span>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        </div>

                        <div class="mailContent inbox">
                            <form id="typeOfMail">
                                <label for="messages" style="float: left; margin-top: 2px;">New mails only?</label>
                                <input type="checkbox" id="newonly" name="messages" style="float: right;">
                            </form>

                            <div id="allMail">
                                <?php
                                foreach ($inbox[1] as $mails) {
                                $stmt = $dbh->prepare('SELECT username, look FROM users WHERE id = :id LIMIT 1');
                                $stmt->bindParam(':id', $mails['sender_id']);
                                $stmt->execute();
                                $information = $stmt->fetch();
                                $name = $information[0];
                                $look = $information[1];
                                ?>
                                <div style="clear: both"></div>
                                <div class="mailBox mail_<?php echo $mails['id']; ?>">
                                    <img class="mailImg"
                                         src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&direction=2&head_direction=2&size=s"/>

                                    <div class="mailText <?php if ($mails['opened'] == false) {
                                        echo 'newMail ';
                                    }
                                    if ($mails['reported']) {
                                        echo 'reported ';
                                    }
                                    ?>" id="mail_<?php echo $mails['id']; ?>">
                                        <p class="date"><?php echo $mails['mailed_on']; ?></p>
                                        <img class="report" id="report_<?php echo $mails['id']; ?>"
                                             src="{url}/app/tpl/skins/Habbo/images/minimail/flag_red.png"/>

                                        <p class="mailTitle">Title: <?php echo $mails['subject']; ?></p>
                                        <h4 class="mailName">From: <u><?php echo $name ?></u></h4>

                                        <div class="mailInfo">
                                            <?php echo $mails['content']; ?>
                                        </div>

                                        <div class="reportedText" <?php if ($mails['reported']) {
                                            echo 'style="opacity: 1;"';
                                        } ?>
                                        <p><u>Reported</u></p>
                                    </div>

                                    <div class="delete reply">Reply</div>
                                    <form action="" method="POST">
                                        <input type="hidden" value="<?php echo $mails['id']; ?>"
                                               name="mail_id_inbox">
                                        <input class="delete" type="submit" name="addToTrash"
                                               value="Trash"/>
                                    </form>

                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div id="unreadMail">
                            <?php
                            foreach ($inbox[0] as $mails) {
                            $stmt = $dbh->prepare('SELECT username, look FROM users WHERE id = :id LIMIT 1');
                            $stmt->bindParam(':id', $mails['sender_id']);
                            $stmt->execute();
                            $information = $stmt->fetch();
                            $name = $information[0];
                            $look = $information[1];
                            ?>
                            <div style="clear: both"></div>
                            <div class="mailBox mail_<?php echo $mails['id']; ?>">
                                <img class="mailImg"
                                     src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&direction=2&head_direction=2&size=s"/>

                                <div class="mailText <?php if ($mails['opened'] == false) {
                                    echo 'newMail ';
                                }
                                if ($mails['reported']) {
                                    echo 'reported ';
                                }
                                ?>" id="mail_<?php echo $mails['id']; ?>">
                                    <p class="date"><?php echo $mails['mailed_on']; ?></p>
                                    <img class="report" id="report_<?php echo $mails['id']; ?>"
                                         src="{url}/app/tpl/skins/Habbo/images/minimail/flag_red.png"/>

                                    <p class="mailTitle">Title: <?php echo $mails['subject']; ?></p>
                                    <h4 class="mailName">From: <u><?php echo $name ?></u></h4>

                                    <div class="mailInfo">
                                        <?php echo $mails['content']; ?>
                                    </div>

                                    <div class="reportedText" <?php if ($mails['reported']) {
                                        echo 'style="opacity: 1;"';
                                    } ?>
                                    <p><u>Reported</u></p>
                                </div>

                                <div class="delete reply">Reply</div>
                                <form action="" method="POST">
                                    <input type="hidden" value="<?php echo $mails['id']; ?>"
                                           name="mail_id_inbox">
                                    <input class="delete" type="submit" name="addToTrash"
                                           value="Trash"/>
                                </form>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div class="mailContent sent">
                    <?php
                    foreach ($sent as $mails) {
                        $stmt = $dbh->prepare('SELECT username, look FROM users WHERE id = :id LIMIT 1');
                        $stmt->bindParam(':id', $_SESSION['user']['id']);
                        $stmt->execute();
                        $information = $stmt->fetch();
                        $name = $information[0];
                        $look = $information[1];
                        ?>
                        <div style="clear: both"></div>
                        <div class="mailBox">
                            <img class="mailImg"
                                 src="https://www.habbo.com.tr/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&direction=2&head_direction=2&size=s"/>

                            <div class="mailText" id="mail_<?php echo $mails['id']; ?>">
                                <p class="date"
                                   style="display: block !important;"><?php echo $mails['mailed_on']; ?></p>

                                <p class="mailTitle" style="display: block !important;">
                                    Title: <?php echo $mails['subject']; ?></p>
                                <h4>From: <u><?php echo $name ?></u></h4>

                                <div class="mailInfo">
                                    <?php echo $mails['content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div style="clear: both"></div>
                </div>
                <div class="mailContent trash">
                    <?php if ($errorMessage != null) { ?>
                        <div class="error">
                            <p><?php echo $errorMessage; ?></p>
                        </div>
                    <?php }
                    foreach ($trash as $mails) {
                        $stmt = $dbh->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                        $stmt->bindParam(':id', $mails['sender_id']);
                        $stmt->execute();
                        $name = $stmt->fetch();
                        $name = $name[0];
                        ?>
                        <div style="clear: both"></div>
                        <div class="mailBox">
                            <img class="mailImg"
                                 src="https://www.habbo.com.tr/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&direction=2&head_direction=2&size=s"/>

                            <div class="mailText" id="mail_<?php echo $mails['id']; ?>">
                                <p class="date"><?php echo $mails['mailed_on']; ?></p>

                                <p class="mailTitle">Title: <?php echo $mails['subject']; ?></p>
                                <h4>From: <u><?php echo $name ?></u></h4>

                                <div class="mailInfo">
                                    <?php echo $mails['content']; ?>
                                </div>
                                <form action="" method="POST">
                                    <input type="hidden" value="<?php echo $mails['id']; ?>"
                                           name="mail_id_trash">
                                    <input class="delete" type="submit" name="addToTrash" value="Delete"/>
                                </form>

                            </div>
                        </div>
                    <?php } ?>
                    <div style="clear: both"></div>
                </div>
                <div class="mailContent send">
                    <form action="" method="POST" id="sendMail" autocomplete="off">
                        <input type="hidden" value="1" name="mail_sent"/>
                        <label for="reciever">To</label>
                        <input id="recieverName" type="text" name="reciever" class="awesomplete"
                               data-list="#friendList"
                               autocomplete="off"/>

                        <ul id="friendList" style="display: none;">
                            <?php
                            $stmt = $dbh->prepare('SELECT * FROM messenger_friendships WHERE user_one_id = :id OR user_two_id = :id2');
                            $stmt->bindParam(':id', $_SESSION['user']['id']);
                            $stmt->bindParam(':id2', $_SESSION['user']['id']);
                            $stmt->execute();
                            $friends = $stmt->fetchAll();

                            foreach ($friends as $friend) {
                                $stmt = $dbh->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                                $friendID = $friend['user_two_id'];
                                if ($friendID == $_SESSION['user']['id'])
                                    $friendID = $friend['user_one_id'];
                                $stmt->bindParam(':id', $friendID);
                                $stmt->execute();
                                $username = $stmt->fetch();
                                $username = $username[0];
                                ?>
                                <li class="friendDropdown"><?php echo $username; ?></li>
                            <?php } ?>

                        </ul>
                        </datalist>
                        <label for="subject">Subject</label>
                        <input id="sendMsgSubjects" type="text" name="subject" autocomplete="off"/>
                        <script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
                        <label for="message" autocomplete="off">Message</label>
                    </form>
                                <textarea rows="4" cols="50" name="message" form="sendMail"
                                          class="mceEditor"></textarea>
                </div>
                <?php if ($_SESSION['user']['rank'] > 5) { ?>
                    <div class="mailContent staff">
                        <?php
                        foreach ($reports[1] as $mails) {
                            $stmt = $dbh->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                            $stmt->bindParam(':id', $mails['sender_id']);
                            $stmt->execute();
                            $sender = $stmt->fetch();
                            $sender = $sender[0];
                            $stmt = $dbh->prepare('SELECT username FROM users WHERE id = :id LIMIT 1');
                            $stmt->bindParam(':id', $mails['reciever_id']);
                            $stmt->execute();
                            $reciever = $stmt->fetch();
                            $reciever = $reciever[0];
                            ?>
                            <div style="clear: both"></div>
                            <div class="mailBox">
                                <img class="mailImg"
                                     src="https://www.habbo.com.tr/habbo-imaging/avatarimage?figure=<?php echo $look; ?>&direction=2&head_direction=2&size=s"/>

                                <div class="mailText <?php if (!$mails['checked']) {
                                    echo 'reported';
                                } ?>" id="mail_<?php echo $mails['id']; ?>">
                                    <p class="date"><?php echo $mails['mailed_on']; ?></p>

                                    <p class="mailTitle">Title: <?php echo $mails['subject']; ?></p>
                                    <h4>From: <u><?php echo $sender ?></u></h4>
                                    <h4>To: <u><?php echo $reciever; ?></u></h4>

                                    <div class="mailInfo">
                                        <?php echo $mails['content']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div style="clear: both"></div>
                    </div>
                <?php } ?>

                <script type="text/javascript">
                    tinyMCE.init({
                        mode: "textareas",
                        theme: "simple",
                        editor_selector: "mceEditor",
                        editor_deselector: "mceNoEditor"
                    });
                </script>
                <div class="new-buttons clearfix">
                    <div class="labels inbox-refresh"><a href="" class="new-button green-button"
                                                         style="float: left; margin: 0"><b>Refresh</b><i></i></a>
                    </div>
                    <div class="labels inbox-refresh sendMail"><a href="#"
                                                                  onclick="document.getElementById('sendMail').submit();"
                                                                  class="new-button green-button"
                                                                  style="float: right; margin: 0"><b>Send</b><i></i></a>
                    </div>
                </div>

                <div style="clear: both; height: 1px"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
            Rounder.init();
        }</script>
</div>
<div id="column2" class="column">
    <div class="habblet-container "></div>
    <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
            Rounder.init();
        }</script>

    <div class="habblet-container news-promo">
        <div class="cbb clearfix notitle ">
            <div id="newspromo">
                <div id="topstories">
                    <div class="topstory"
                         style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-1})">
                        <h4>Latest news</h4>

                        <h3><a href="{url}/index.php?url=news&id={newsID-1}">{newsTitle-1}</a></h3>

                        <p class="summary">
                            {newsCaption-1}
                        </p>

                        <p>
                            <a href="{url}/index.php?url=news&id={newsID-1}">Read more &raquo;</a>
                        </p>
                    </div>

                    <div class="topstory"
                         style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-2}); display: none">
                        <h4>Latest news</h4>

                        <h3><a href="{url}/index.php?url=news&id={newsID-2}">{newsTitle-2}</a></h3>

                        <p class="summary">
                            {newsCaption-2}
                        </p>

                        <p>
                            <a href="{url}/index.php?url=news&id={newsID-2}">Read more &raquo;</a>
                        </p>
                    </div>

                    <div class="topstory"
                         style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-3}); display: none">
                        <h4>Latest news</h4>

                        <h3><a href="{url}/index.php?url=news&id={newsID-3}">{newsTitle-3}</a></h3>

                        <p class="summary">
                            {newsCaption-3}
                        </p>

                        <p>
                            <a href="{url}/index.php?url=news&id={newsID-3}">Read more &raquo;</a>
                        </p>
                    </div>
                    <div id="topstories-nav" style="display: none"><a href="#" class="prev">&laquo;
                            Previous</a><span>1</span> / 3<a href="#" class="next">Next &raquo;</a></div>
                </div>
                <ul class="widelist">
                    <li class="even"><a href="{url}/index.php?url=news&id={newsID-1}">{newsTitle-1} &raquo;</a>

                        <div class="newsitem-date">{newsDate-1}</div>
                    </li>
                    <li class="odd"><a href="{url}/index.php?url=news&id={newsID-2}">{newsTitle-2} &raquo;</a>

                        <div class="newsitem-date">{newsDate-2}</div>
                    </li>
                    <li class="last"><a href="/news">More news &raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        document.observe("dom:loaded", function () {
            NewsPromo.init();
        });
    </script>



    <div class="habblet-container">
        <div class="cbb clearfix settings ">
            <h2 class="title">{hotelName} Statistics</h2>

            <div style="padding: 5px;">
                <ul class="today-in-habbo">
                    <li>We have
                        <b><?php echo number_format(mysql_num_rows(mysql_query("SELECT NULL FROM users"))); ?></b>
                        registered users,
                    </li>
                    <li class="even">and
                        <b><?php echo number_format(mysql_num_rows(mysql_query("SELECT NULL FROM users WHERE vip = '1'"))); ?></b>
                        of them are VIP!
                    </li>
                    <li>Our staff team has posted
                        <b><?php echo number_format(mysql_num_rows(mysql_query("SELECT NULL FROM cms_news"))); ?></b>
                        news articles
                    </li>
                    <li class="even">and have protected you from
                        <b><?php echo number_format(mysql_num_rows(mysql_query("SELECT NULL FROM bans"))); ?></b> users!
                    </li>
                    <li>Please welcome our latest member <b>
                            <?php
                            $result = mysql_query("SELECT * FROM users ORDER BY id DESC LIMIT 1");
                            while ($row = mysql_fetch_array($result)) {
                                echo '<a href="home/' . htmlentities($row['username'], ENT_QUOTES, 'iso-8859-1') . '" class="grey-link">' . ucfirst(htmlentities($row['username'], ENT_QUOTES, 'iso-8859-1'));
                            }
                            ?></a></b>!
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<script type="text/javascript">
    document.observe('dom:loaded', function () {
        CurrentRoomEvents.init();
    });
</script>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
        Rounder.init();
    }</script>
<script type="text/javascript">
    HabboView.run();
</script>

<!--[if lt IE 7]>
<script type="text/javascript">
    Pngfix.doPngImageFix();
</script>
<![endif]-->

<?php
require_once('app/tpl/skins/Habbo/includes/footer.php');
?>

</body>
</html>