<?php
require("config.php");
$id = $_GET["movieId"];

mysql_connect($mysql_host, $mysql_user, $mysql_password) or die(mysql_error());
mysql_select_db($mysql_database) or die(mysql_error());
?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title>Habbowood</title>
</head>
<body bgcolor="#292929">

<object type="application/x-shockwave-flash" data="<?php echo $script_url; ?>flash/movie_player_skin.swf?figuredata_url=<?php echo $script_url; ?>xml/figure_data_xml_hc.xml&movie_data_url=<?php echo $script_url; ?>movie_xml_data.php?id=<?php echo utf8_encode(mysql_result(mysql_query("SELECT id FROM movies WHERE id = '" . mysql_real_escape_string($id) . "'"), 0)); ?>&localization_url=<?php echo $script_url; ?>/xml/locale.xml" width="536" height="360">
<param name="base" value="<?php echo $script_url; ?>flash/" />
<param name="allowScriptAccess" value="always" />
</object>

</body>
</html>