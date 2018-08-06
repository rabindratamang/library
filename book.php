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
				echo "</i></ul><div id='lolol'><div id='info'>Please <a href='style.php'>Log in</a> first!</div>";
			}
			
function lololol(){
	logout();
	echo<<<html
	<div class="container-fluid-text-center">
<table>
<tr>
<a href="insertbook.php"><button class="button" type="submit">Insert Book</button></a>
</tr>
<tr>
<a href="modifybook.php"><button class="button" type="submit">Modify Book</button></a>
</tr>
<tr>
<a href="viewbook.php"><button class="button" type="submit">View Book</button></a>
</tr>

</table></div>
html;
}
?>