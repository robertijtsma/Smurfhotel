<?php
class HoloFigure {
//HoloFigure class
//Checks if the submitted figure is valid.
//Copyright (R) 2009 - Yifan Lu (www.yifanlu.com)
//Please do not remove this :-)
	var $error = 0;
	function HoloFigure($figure,$gender,$club=false){
		$xml = simplexml_load_file('./r63/figuredata.xml'); //Init XML engine
		$sets = explode(".",$figure); //Split the figure into sets
		foreach($sets as $set){
			$valid = array(false,false,false,false); //everything is invalid until verified
			$parts = explode("-",$set); //each set is composed of three parts, 1 - part, 2 - partid, 3 - color
			$havesets[] = $parts[0];
			foreach($xml->sets->settype as $settype){ //verify if settype exists
				if((string) $settype['mandatory'] == "1"){ $mandatory[] = $settype['type']; } //make a array of mandatory sets for future use
				if((string) $settype['type'] == $parts[0]){
					$parts[3] = $settype['paletteid'];
					$valid[0] = true; $type = $settype; //valid, this is the set we are going to use
					break;
				}
			}
			if($valid[0] != true){ $this->error = 1; return false; } //no set found under that name
			foreach($type->set as $xset){
				if((string) $xset['id'] == $parts[1]){
					if($xset['selectable'] == "0"){ $this->error = 2; return false; } //this set is not selectable
					if($xset['colorable'] == "0"){ $nocolor = true; if($parts[2] != ""){ $this->error = 3; return false; } }else{ $nocolor = false; } //cannot color a uncolorable object
					if($xset['gender'] != $gender && $xset['gender'] != "U"){ $this->error = 4; return false; } // wrong gender
					if($xset['club'] == "1" && $club == false){ $this->error = 5; return false; } //Not a club member
					$valid[1] = true; $details = $xset; //Make an array of the eyes, legs, etc (not in use currently)
					break;
				}
			}
			if($valid[1] != true){ $this->error = 6; return false; } //set id not found
			if($nocolor != true){ //if item cannot be colors, then skip this check
				foreach($xml->colors->palette as $palette){ //check if palette exists
					if((string) $palette['id'] == (string) $parts[3]){
						$valid[2] = true; $pat = $palette;
						break;
					}
				}
				if($valid[2] != true){ $this->error = 7; return false; } //palette not found
				foreach($pat->color as $color){ //check if color exists
					if((string) $color['id'] == $parts[2]){
						if($color['club'] == "1" && $club == false){ $this->error = 8; return false; } //club color, not club member
						if($color['selectable'] == "0"){ $this->error = 9; return false; } // color not selectable
						$valid[3] = true;
						break;
					}
				}
				if($valid[3] != true){ $this->error = 10; return false; } // color not found
			}
		}
		if(count($mandatory) != count(array_intersect($mandatory,$havesets))){ $this->error = 11; return false; } //Check if all mandatory sets are used
		return true;
	}
}
//How to use this
$figure = new HoloFigure("hd-200-15.ch-804-94.lg-270-82.sh-305-91.ha-1019-.hr-170-50.he-1603-68.ea-1403-85.fa-1203-.ca-1812-.wa-2005-","M",true);
if($figure->error > 0){ //error occured
	//Do error handleing
	switch($error){ //OPTIONAL ERROR MESSAGES
		case 1: $error = "One or more set(s) has an invalid name."; break;
		case 2: $error = "One or more set(s) chosen not available."; break;
		case 3: $error = "One or more set(s) cannot be colored."; break;
		case 4: $error = "One or more set(s) is not available for this gender."; break;
		case 5: $error = "One or more set(s) is not available for non-HC members."; break;
		case 6: $error = "One or more set(s) is invalid."; break;
		case 7: $error = "One or more set(s) has an invalid color."; break;
		case 8: $error = "One or more color(s) is not available for non-HC members."; break;
		case 9: $error = "One or more color(s) is not selectable."; break;
		case 10: $error = "One or more color(s) is not available."; break;
		case 11: $error = "This figure does not have all the required sets."; break;
		default: $error = "Unknown error."; break;
	}
}
?>
