<?php
	/**
	 * SIMPLE CAPTCHA IMAGE SCRIPT
	 * Copyright (C) 2010  Constantin Boiangiu  (http://www.php-help.ro)
	 * 
	 * This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 * 
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	 **/

	session_start();	
	/*
		we create out image from the existing jpg image.
		You can replace that image with another of the 
		same size.
	*/
	$img=imagecreatefromjpeg("LHlZ7.jpg");	
	/*
		defines the text we use in our image,
		in our case the security number defined
		in index.php
	*/
	$security_number = empty($_SESSION['security_number']) ? 'error' : $_SESSION['security_number'];
	$image_text=$security_number;	
	/*
		we define 3 random numbers that will
		eventually create our text color code (RGB)
	*/
	$red=rand(100,255); 
	$green=rand(100,255);
	$blue=rand(100,255);
	/*
		in order to have different color for our text, 
		we substract from the maximum 255 the random
		number generated above
	*/
	$text_color=imagecolorallocate($img,255,255,255);
	/*
		this adds the text stored in $image_text to our 
		capcha image
	*/
	$text=imagettftext($img,22,0, 15, 33 ,$text_color,"fonts/Ubuntu-B.ttf",$image_text);
	/*
		we tell the browser that he's dealing
		with a jpg image, although that's not true,
		he will have to belive us
	*/
	header("Content-type:image/jpeg");
	header("Content-Disposition:inline ; filename=secure.jpg");	
	imagejpeg($img);
	/* and this is all.*/
?>