<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
{
?>
<button type="button" class="button" onclick="addTool('credits')" name="credits">Add Credits</button>
<button type="button" class="button" onclick="addTool('pixels')" name="pixels">Add Pixels</button>
<button type="button" class="button" onclick="addTool('vip')" name="vip">Add VIP</button>
<button type="button" class="button" onclick="addTool('furni')" name="furni">Add Rares</button>
<button type="button" class="button" onclick="addTool('cmd')" name="commands">Add Commands</button>
<button type="button" class="button" onclick="addTool('badges')" name="badges">Add Badges</button>
<?php
}
?>