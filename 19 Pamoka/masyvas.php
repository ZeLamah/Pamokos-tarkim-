<?php


$tekstas = file("testas.txt");
$tekstas2 = [] ;


foreach ($tekstas as $word) {
	
	$word = str_replace(chr(92), '', $word);
	$word = str_replace(chr(46), '', $word);
	$word = preg_replace('/[0-9]+/', "" , $word);
	$word = trim($word);
	$tekstas2[$word[0]][$word[1]][] = $word;

}

echo "<pre>";
print_r($tekstas2);





