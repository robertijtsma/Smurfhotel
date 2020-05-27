<?php
$newsimages = opendir('../news/') or die('Error');  
while($images = @readdir($newsimages)) {  
	if(!is_dir($images) && $images !== "index.php"){
  		echo '<img src="../../../../../Public/Images/news/'.$images.'" alt="'.$images.'" />';
		echo '<br />';
  		echo '<a href="../../../../../Public/Images/news/'. $images.'">../Public/Images/news/'.$images.'</a>';
		echo '<br /><br /><br />';
	}  
}
closedir($newsimages);  
?>