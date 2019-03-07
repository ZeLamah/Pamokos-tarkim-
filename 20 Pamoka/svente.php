<?php

Class Failas
{

	public $text;
	public $tekstas2 = [] ;

	#removina visus simbolius ir pan, prideda zodi i nauja masyva

public function removeStuff(){
	
	foreach ($this->text as $word) {
	
	$word = str_replace(chr(92), '', $word);
	$word = str_replace(chr(46), '', $word);
	$word = preg_replace('/[0-9]+/', "" , $word);
	$word = trim($word);
	$this->tekstas2[$word[0]][$word[1]][] = $word;

	}
}

#Gauna tekstinio failo pavadinima ir priskiria jo turini masyvui
public function getText($text){

	$text2 = file($text);
	$this->text = $text2;

}
#isveda masyva su pakeistu turiniu i ekrana
public function getStuff(){
	echo "<pre>";
	print_r($this->tekstas2);
}


}

$lel = new Failas();
$lel->getText("testas.txt");
$lel->removeStuff();
$lel->getStuff();



