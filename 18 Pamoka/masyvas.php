<?php


$tekstas = file("testas.txt");


foreach ($tekstas as $zodis) {
	$patern = ["/" , "."]
	$zodis  = str_replace("/~1-9~/", "", $zodis)
	$tekstas2 .= $zodis;
}

echo "<pre>";
print_r($tekstas2);