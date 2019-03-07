
<?php


class Masina
{
	private $name;
	private $price;
	private $color;
	private $rating;
	private $stock;
	private $sale;

	public function getName($name){
		$this->name = $name;
	}

	public function getPrice($price){
		$this->price = $price;
	}

	public function getColor($color){
		$this->color = $color;
	}

	public function getRating($rating){
		$this->rating = $rating;
	}

	public function getStock($stock){
		$this->stock = $stock;
	}

	public function RETURN(){
		

		echo ("Masinos pavadinimas : " . $this->name);
		echo "<br>";
		echo ("Masinos kaina : " . $this->price);
		echo "<br>";
		echo ("Masinos spalva : " . $this->color);
		echo "<br>";
		echo ("Masinos reitingas : " . $this->rating);
		echo "<br>";
		echo ("Masinos STOCK : " . $this->stock);
		echo "<br>";
		echo ("Masinos SALE : " . $this->sale);
		echo "<br>";
		echo "<hr>";

	
	
	}

	public function removeNumbers($string){
		$sk = [1,2,3,4,5,6,7,8,9];
		$string2 = str_replace($sk, "" , $string);
		echo $string2;
		echo "<br>";
		echo "<br>";




		
	}

	public function getSale($sale){
		$this->sale = $this->price * $sale;
	}

}




$masina1 = new Masina();
$masina1->getName("Audi");
$masina1->getPrice("1600");
$masina1->getColor("Red");
$masina1->getRating("9.5");
$masina1->getStock("One of a kind");

$masina1->getSale(0.5);

$masina1->RETURN();


$masina2 = new Masina();
$masina2->getName("BMW");
$masina2->getPrice("2000");
$masina2->getColor("Black");
$masina2->getRating("8.2");
$masina2->getStock("Meh...");
$masina2->RETURN();

$masina3 = new Masina();
$masina3->getName("Opel");
$masina3->getPrice("850");
$masina3->getColor("Red");
$masina3->getRating("7.8");
$masina3->getStock("U gatz.");
$masina3->RETURN();

$sakinys = new Masina();
$sakinys->removeNumbers("I6spa76nija yr8a ah54ujen23a.");




?>






