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
	echo "<div id='lolol'>";
	viewBook();
	echo"</div>";
}
?>