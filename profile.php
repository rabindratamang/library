<?php 
session_start();?>
<?php
require "header2.php";?>	
<?php require"function.php"?>
<?php require"function2.php"?>
		
<?php
			if(isset($_SESSION['user'])){
				lololol();
			}else{
				echo "</i></ul><div id='lolol'><div id='info'>Please <a href='register.php'>Log in</a> first!</div>";
			}
			
function lololol(){
	logout();
			
	echo"

		<div id='lolol'><div id='loname2'> Welcome to your profile,<i>{$_SESSION['user']['fname']}</i>! 	";
		echo"
				<table>
				<tr><td>Name :</td><td> {$_SESSION['user']['fname']}\t{$_SESSION['user']['lname']}</td></tr>
				<tr><td>Address :</td><td>{$_SESSION['user']['address']}</td></tr>
				<tr><td>Phone :</td><td> {$_SESSION['user']['phone']}</td></tr>
				<tr><td>Age :</td><td> {$_SESSION['user']['age']}</td></tr>
				<tr><td>Username :</td><td>{$_SESSION['user']['username']}</td></tr>
				<tr><td>Password :</td><td>{$_SESSION['user']['password']}</td></tr>
								</table>
";
	}
?>