<?php

/*****< CatalogPanel by ATKD >*****/

class Ydin {
	
	public function Suodata($merkkijono = "") {
		return mysql_real_escape_string(htmlspecialchars(strip_tags(trim($merkkijono))));
	}
	
	public function Kirjaudu($tunnus = "", $salasana = "") {
		
		$salasana = md5($salasana);
		
		global $minimi_rank;
				
		$tulos = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '" . $tunnus . "'"));
						
		if(strtoupper($tunnus) != strtoupper($tulos["username"]) || $salasana != $tulos["password"])
			return 0;
		elseif($tulos["rank"] < $minimi_rank)
			return 1;
		else
			return NULL;
		
	}
	
	public function SivuNimi($sivu = "") {
		$tulos = mysql_fetch_array(mysql_query("SELECT caption FROM catalog_pages WHERE id = " . $sivu));
		return $tulos["caption"];
	}
	
	public function KyllaEi($arvo = "") {
		if(!is_numeric($arvo))
			if($arvo < 2)
				return NULL;
		
		if($arvo == 0)
			return "No";
		else
			return "Yes";
	}
	
	public function TarkistaOikeudet() {
		global $minimi_rank;
		$tulos = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username = '" . $_SESSION["tunnus"] . "'"));
		if($tulos["rank"] < $minimi_rank)
			return false;
		else
			return true;
	}
	
	
}


?>