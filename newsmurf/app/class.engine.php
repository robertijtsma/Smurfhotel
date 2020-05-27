<?php
namespace Revolution;
use PDO;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class engine
{
	private $initiated;
	private $connected;

	public $connection;


	final public function Initiate()
	{
		global $_CONFIG;
		if(!$this->initiated)
		{
			$this->initiated = true;
			$this->connect();
		}
	}

	final public function setMySQL($key, $value)
	{
		$this->mysql[$key] = $value;
	}


	/*-------------------------------Manage Connection-------------------------------------*/

	final public function connect()
	{
		global $core, $_CONFIG;
		if(!$this->connected)
		{
			try {
				$this->connection = new PDO('mysql:host=' . $_CONFIG['mysql']['hostname'] . ';dbname=' . $_CONFIG['mysql']['database'], $_CONFIG['mysql']['username'], $_CONFIG['mysql']['password']);
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->connected = true;
			} catch(PDOException $e) {
        if($_CONFIG['site']['mode'] == 'Production')
        {
          echo $core->systemError('MYSQL Engine', 'Cannot connect to Database.');
        } else {
          echo $core->systemError('MySQL Engine', $e->getMessage());
        }
			}

			if($this->connection)
			{
				if(!$this->connected)
				{
					$core->systemError('MySQL Engine', 'MySQL could not connect to database');
				}
			}
			else
			{
				$core->systemError('MySQL Engine', 'MySQL could not connect to host');
			}
		}
	}

	final public function disconnect()
	{
		global $core;
		if($this->connected)
		{
			if($this->mysql['close'])
			{
				$this->connected = false;
			}
			else
			{
				$core->systemError('MySQL Engine', 'MySQL could not disconnect.');
			}
		}
	}

	/*-------------------------------Secure MySQL variables-------------------------------------*/

	final public function secure($var)
	{
		return stripslashes(htmlspecialchars($var));
	}

	/*-------------------------------Manage MySQL queries-------------------------------------*/

	final public function query($sql)
	{
		return $this->connection->query($sql);
	}

	final public function num_rows($sql)
	{
		return $this->connection->query($sql)->fetchColumn();
	}

	final public function result($sql)
	{
		return $this->connection->query($sql)->fetchColumn();
	}

	final public function free_result($sql)
	{
		$this->connection = null;
		return $this->connection;
	}

	final public function fetch_array($sql)
	{
		$query = $this->connection->query($sql);

		$data = array();

		while($row = $query->fetch(PDO::FETCH_ASSOC))
		{
			$data[] = $row;
		}

		return $data;
	}

	final public function fetch_assoc($sql)
	{
		return $this->connection->query($sql)->fetch(PDO::FETCH_ASSOC);
	}
}
?>
