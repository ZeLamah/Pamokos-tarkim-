<?php


Class Failas
{


public function removeSlashes($string){
	return stripslashes($string);
}
public function removNumbers($string){
	return preg_replace('/[0-9]+/', "" , $string);
}
public function removeDots($string){
	return str_replace(chr(46), '', $string);
}

public function changeData($array){

	$changedArray = [];

	foreach ($array as $value) {

	$value = stripslashes($value);
	$value = preg_replace('/[0-9]+/', "" , $value);
	$value = str_replace(chr(46), '', $value);
	$changedArray[] = $value;

	}
	print_r($changedArray);

}



}

$lel = new Failas();
$lel-> changeData("lolas1\\" . "yeyeyey44343" . "42142asdas");
