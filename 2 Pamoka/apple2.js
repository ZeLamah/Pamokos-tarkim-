

function Kriminalas(){

	var variable = document.querySelector('input[name=Kriminalas]:checked').value;

	var age = document.getElementById('age').value;
	
	if(age>=18 && age<26 && variable == 2){
		alert('Armija Laukia!');
	}else{
		alert('Duhas');
	}

}