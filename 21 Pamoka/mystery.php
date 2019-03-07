<?php


Class Failas
{
public $changedData = [];

public function removeSlashes($string){
	return stripslashes($string);
}
public function removeNumbers($string){
	return preg_replace('/[0-9]+/', "" , $string);
}
public function removeDots($string){
	return str_replace(chr(46), '', $string);
}

public function changeData($array){

	foreach ($array as $value) {
		
		$value = stripslashes($value);
		$value = str_replace(chr(46), "", $value);
		$value = preg_replace('/[0-9]+/', "" , $value);
		
		$this->changedData[] = $value;
		echo ($value . " ");

	}
}

}


$lel = new Failas();
# KODEL PAKEICIA TIK 3 (\)  ????


$lel->changeData(["5H60e4ll3o" , "A3mazi.32n3g" , "Wo132rl1.2d"]);

