<?php

/****< Database >****/
$tietokanta_kayttaja = "root";					//Database username [Example: root]
$tietokanta_salasana = "password";		//Database password
$tietokanta = "database";							//Database name, where you hotel is working
$tietokanta_hosti = "localhost";				//Database host [Example: localhost]

/****< Other options >****/
if(!isset($_SESSION["riveja"]))
	$_SESSION["riveja"] = 50;		//The Number of the lines the default number of

$minimi_rank = 7;					//Minimum distiller's grain, which may login here!!! MUAHAHHA
$rare_sivu_id = 16;					//Rare page ID, normal is 16, if you dont change it

if(!isset($_SESSION["sisalla"]))	//DONT TOUCH THIS
	$_SESSION["sisalla"] = false;

?>