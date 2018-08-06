<?php session_start();?>
<?php require "header.php";?>
<?php require"function.php"?>
<?php require"function2.php"?>

<?php 

			if(isset($_SESSION['user'])){
			showMain();
			}else{
				echo "<div id='lolol'><div id='info'><a href='style.php'>Log in</a> first!</div>";
			}

function showMain(){
	logout();
	echo<<<html
	<div id='lolol'><div id='info'> Welcome to your profile, <i>{$_SESSION['user']['fname']}</i>! </div>	
	<div class="container-fluid-text-center">
<table>
<tr>
<a href="profile.php">
<button class="button" type="submit">Admin's profile</button></a>
</tr>
<tr>
<a href="book.php"><button class="button" type="submit">Book info</button></a>
</tr>
<tr>
<a href="student.php"><button class="button" type="submit">Students info</button></a>
</tr>
<tr>
<a href="issue.php"><button class="button" type="submit">Book issue</button></a>
</tr>
<tr>
<a href="return.php"><button class="button" type="submit">Book return</button></a>
</tr>
</table>
html;
}
?>