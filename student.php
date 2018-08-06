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
				echo "</i></ul><div id='lolol'><div id='info'>Please <a href='style.php.php'>Log in</a> first!</div>";
			}
			
function lololol(){
	logout();
	echo<<<html
	<div class="container-fluid-text-center">
<table>
<tr>
<a href="insertstu.php"><button class="button" type="submit">Insert Student</button></a>
</tr>
<tr>
<a href="modifystu.php"><button class="button" type="submit">Modify Students</button></a>
</tr>
<tr>
<a href="viewstu.php"><button class="button" type="submit">View Students</button></a>
</tr>

</table></div>
html;
}
?>