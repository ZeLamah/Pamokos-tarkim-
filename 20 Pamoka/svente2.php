<?php


Class Books{

private $name = null;

public function setName($name){
	$this->name = $name;
}
# die("nepaejo") sustabdo metoda.
public function getName(){
	if($this->name != null){
		echo $this->name;
	}else{
		echo "Rip, the name aint defined homie :(";
	}

}

}


$obj = new Books();
$obj->setName("Liurbis");
$obj->getName();

