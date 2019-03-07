

// function money(){
// 	var age = document.getElementById('years').value
	

// 	if(age<10){
// 		var money = 100
// 		alert("Gausi 100 doleriu")
// 	}else if(age>= 20 && age<20){
// 		var money = 150
// 		alert("Gausi 150 Doleriu")





// }


// function lotery(){


// 	var sk = Math.floor((Math.random() * 15)+1);

// 	if( sk == 1 ){
// 		alert("Laimejote 3 Bilietus!")
// 	}else if( sk == 2 || sk == 3 || sk = 4 ){
// 		alert("Laimejote 2 Bilietus!")
// 	}else if( sk == 5 || sk == 6 || sk = 7 ){
// 		alert("Laimejote 1 Bilietus!")
// 	}else{
// 		alert("Nieko  nelaimejai!")
// 	}
// }





// function lottery(){

// 	var sk = Math.floor((Math.random() * 15)+1);

// 	switch(sk){
// 		case 1:
// 		alert("Laimejai 3 bilietus");
// 		break;

// 		case 2:
// 		alert("Laimejai 2 bilietus");
// 		break;

// 		case 5:
// 		alert("Laimejai 1 bilietus");
// 		break;

// 		case 8:
// 		alert("Laimejai 0 bilietus");
// 		break;
// 	}
// }

	var number = prompt("Koks skaicius?");
	var zv =  '*';
	for(var i=0; i<number; i++){
		console.log(zv);
		zv +='*';
	}



