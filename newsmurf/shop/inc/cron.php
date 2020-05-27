<?php
class Cron
{
	function Execute()
	{
		$query = mysql_query("SELECT id FROM points_cron WHERE enable = '1'");
		
		while ($job = mysql_fetch_assoc($query))
		{
			if ($this->GetNextExec($job['id']) <= time())
			{
				$this->RunJob($job['id']);
			}
		}
	}
	
	function RunJob($jobId)
	{
		
		$script = mysql_result(mysql_query("SELECT file FROM points_cron WHERE id = '" . $jobId . "' LIMIT 1"), 0);
		
		if (!$this->CheckScript($script))
		{
			return;
		}

		require_once M . C . $script;
		
		mysql_query("UPDATE points_cron SET exc_last = '" . time() . "' WHERE id = '" . $jobId . "' LIMIT 1");
	}
	
	function CheckScript($script)
	{
		if (file_exists(M . C . $script))
		{
			return true;
		}
		
		return false;
	}
	
	function GetNextExec($jobId)
	{
		$query = mysql_query("SELECT exc_last,exc_every FROM points_cron WHERE id = '" . $jobId . "' LIMIT 1");
		
		if (mysql_num_rows($query) == 1)
		{
			$data = mysql_fetch_assoc($query);
						
			return $data['exc_last'] + $data['exc_every'];		
		}
		
		return -1;
	}
}

?>