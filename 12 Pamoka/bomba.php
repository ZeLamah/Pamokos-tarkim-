<?php



// function kauliukas(){
// 	$a = rand(1,6);
// 	$b = rand(1,6);

// 	if($a>=5 && $b>=5){
// 		echo $a . "<br>" . $b;
// 		kauliukas();
// 	}else{
// 		echo "<br>" . "RIP";
// 	}
// }

// kauliukas();


// 


function faktorialas($sk){
	if($sk > 1){
		$sk = $sk * faktorialas($sk-1);
		return $sk;
	}else{
		return 1;
	}
}



 echo faktorialas(5);

?>