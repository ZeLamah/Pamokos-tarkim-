<?php
	$db_user = 'admin';
	$db_pass = '12345';

	$user = $_POST['name'];
	$pass = $_POST['pass'];

	if($user === $db_user && $pass === $db_pass){
		header("Location: http://localhost:8888/Pamokos%20(tarkim)/PILNA/1%20grupe/Main/dziugas.html");
	}
	else{
		
		header("Location: http://localhost:8888/Pamokos%20(tarkim)/PILNA/1%20grupe/Main/dziugas.html");
	}
?>