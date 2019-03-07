<?php

$User= $_POST['uname'];  
$Password= $_POST['psw']; 
$Passwrd_conf=$_POST['psw_conf'];
$Email=$_POST['email'];

if (empty($User) || empty($Password) || empty($Passwrd_conf) || empty($Email)){
	echo "Blogai suvesti duomenys";
}else if ($Password!== $Passwrd_conf) {
 	echo "Blogai suvestas slaptazodis";
 }else{ 	
	echo "Sveiki prisijunge"; 
	}