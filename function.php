<style>
#info{
	height:20%;
	padding:45px;
	font-size:25px;
	background-color:white;
	text-align:center;
	font-family:georgia;
}
</style>
<?php

function logout(){
	if(isset($_GET['action']) && $_GET['action']=='logout'){
				unset($_SESSION['user']);
				 echo '<meta http-equiv="refresh" content="0;url=style.php" />';
			}
}

function returnbook(){
function deleteBookRow($bookid,$studentid){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "delete from issue where bookid=$bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "Data has been deleted";
	}
function bookReturnInfo($bookid){
	
		
			$con = mysqli_connect("localhost","root","","book");
		if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "select * from issue order by bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("cannot perform query ".mysqli_error($con));
		}
		echo "<form name='f2' method='post' action='$_SERVER[PHP_SELF]'><table><tr><th>Book ID</th><th>Student ID</th><th>Issued date</th><th>Deadline</th><th>Fine</th></tr>";
	
	
	while($row = mysqli_fetch_assoc($result)){
		if($row[bookid]==$bookid){
		$deadline=intval(substr(strval($row[deadline]), -5, 2));
	$date=date("m");
	if($deadline<$date){
		$row[fine]=50;
		while($deadline==date("m")){
			$row[fine]=$row[fine]+30;
		}
	}
	else{
		$row[fine]=0;
	}
	$id=$row[bookid];
	$idd=$row[studentid];
			echo "<tr><td>$row[bookid]</td><td>$row[studentid]</td><td>$row[issue]</td><td>$row[deadline]</td><td>$row[fine]</td></tr>";
}
	}
	echo"</tr><tr><input type='hidden' name='check99' value='1' /></tr><tr><td colspan=3><a href='$_SERVER[PHP_SELF]?action=lol&bookid=$bookid'><button type='submit'>Done</button></a></td></tr></table></form>";


	if(isset($_GET['action'])&&$_GET['action']=='lol'){
		deleteBookRow($id,$idd);
	}
}
function bookReturnForm(){	
	echo<<<__HTML__
			<form name='f2' method='post' action="$_SERVER[PHP_SELF]">
				<table>
				<tr><td>Book no. :</td><td> <input type='text' name='bookid'></td></tr>
				<tr><td>Student no. : </td><td><input type='text' name='studentid'  /></td></tr>
				<tr><td><input type='hidden' name='check5' value='1' /></td></tr>
				<tr><td colspan='2'><button type='submit'>Submit</button></td></tr>
				</table>
			</form>
__HTML__;
}
if(isset($_POST['check5']))
			{
				bookReturnInfo($_POST['bookid']);
			}else
			{
				bookReturnForm();
	}

}
function insertBook(){
function insertBookData($name,$author){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "insert into book (name,author) values ('$name','$author')";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "Book has been added!";
	}
	function insertBookForm(){
		echo<<<__HTML__
			<form name='f2' method='post' action="$_SERVER[PHP_SELF]">
			<table>
				<tr><td>Name :</td><td> <input type='text' name='name'  /></tr>
				<tr><td>Author :</td><td>  <input type='text' name='author'  /></tr>
				<tr><input type='hidden' name='check' value='1' /></tr>
				<tr><td><button type='submit'>Submit</button><td></tr>
				</table>
			</form>
__HTML__;
	}

			if(isset($_POST['check']))
			{
				insertBookData($_POST['name'],$_POST['author']);
				insertBookForm();
			}else
			{
				insertBookForm();
	}
}
function modifyBook(){
function deleteBookRow($bookid){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "delete from book where bookid=$bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "Data has been deleted";
	}
	function updateBookRow($bookid){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "select * from book where bookid=$bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("cannot perform query ".mysqli_error($con));
		}
		$book = array();
		while($row = mysqli_fetch_assoc($result)){
			$book['name'] = $row['name'];
			$book['author'] = $row['author'];
			$book['studentid'] = $row['studentid'];
			$book['deadline'] = $row['deadline'];
		return $book;
	}
	}
	function updateBookForm($defaults){
		echo<<<html
		<form name='f1' method='post' action="$_SERVER[PHP_SELF]">
				Name : <input type='text' name='name' value="$defaults[name]" /><br />
				Author : <input type='text' name='author' value="$defaults[author]" /><br />
				<input type='hidden' name='check1' value='1' />
				<input type='hidden' name='bookid' value='$_GET[bookid]' />
				<button type='submit'>Submit</button>
			</form>
html;
	}
	function updateBookData($bookid,$name,$author){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "update book set name='$name',author='$author' where bookid=$bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "Data has been updated";
	}

	
	if(isset($_GET['action'])&&$_GET['action']=='update'){
		$row = updateBookRow($_GET['bookid']);
		updateBookForm($row);
	}elseif(isset($_GET['action'])&&$_GET['action']=='delete'){
		deleteBookRow($_GET['bookid']);
	}elseif(isset($_POST['check1'])){
		updateBookData($_POST['bookid'],$_POST['name'],$_POST['author']);
	}

			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "select * from book order by bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		$colors = array("white","blue");
		$index = 0;
		echo "<table border='0.5' cellspacing='0'><tr class='blue'><th>bookid</th><th>name</th><th>author</th><th>Issued By</th><th>Date of Return</th><th>Operation</th></tr>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr class='$colors[$index]'><td>$row[bookid]</td><td>$row[name]</td><td>$row[author]</td><td>$row[studentid]</td><td>$row[deadline]</td><td>
						<p><a href='$_SERVER[PHP_SELF]?action=update&bookid=$row[bookid]'>Update Entry</a></p>
						<p><a href='$_SERVER[PHP_SELF]?action=delete&bookid=$row[bookid]'>Delete Entry</a></p>
					</td>
				</tr>";
			$index = 1-$index;
		}
		echo"</table>";
	
	
}
function viewBook(){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "select * from book order by bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("cannot perform query ".mysqli_error($con));
		}
		$colors = array("white","blue");
		$index = 0;
		echo "<table border='0.5' cellspacing='0'><tr class='blue'><th>ID</th><th>Name</th><th>Author</th><th>Issued by</th><th>Date of Return</th></tr>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr class='$colors[$index]'><td>$row[bookid]</td><td>$row[name]</td><td>$row[author]</td><td>$row[studentid]</td><td>$row[deadline]</td>
				</tr>";
			$index = 1-$index;
		}
		echo"</table>";
	}
function issuebook(){
function bookIssue($bookid,$studentid){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$issue =date("Y-m-d");
		$y =date("Y");
		$m=date("m");
		$d=date("d");
		$m=$m+1;
		if($m>12){
			$y=$y+1;
			$m="01";
		}
		$deadline="$y-$m-$d";
		$sql = "insert into issue (bookid,studentid,issue,deadline) values ('$bookid','$studentid','$issue','$deadline')";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "Data has been inserted";
	}
function bookIssueInfo($bookid){
		$con = mysqli_connect("localhost","root","","book");
		if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "select * from issue order by bookid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("cannot perform query ".mysqli_error($con));
		}
		echo "<table><th>Book ID</th><th>Student ID</th><th>Issued date</th><th>Deadline</th></tr>";
	while($row = mysqli_fetch_assoc($result)){
		if($row[bookid]==$bookid){
			echo "<tr><td>$row[bookid]</td><td>$row[studentid]</td><td>$row[issue]</td><td>$row[deadline]</td></tr></table>";
		}
}
}
function bookIssueForm(){	
	echo<<<__HTML__
			<form name='f2' method='post' action="$_SERVER[PHP_SELF]">
				<table>
				<tr><td>Book no. :</td><td> <input type='text' name='bookid'></td></tr>
				<tr><td>Student no. : </td><td><input type='text' name='studentid'  /></td></tr>
				<tr><td><input type='hidden' name='check5' value='1' /></td></tr>
				<tr><td colspan='2'><button type='submit'>Submit</button></td></tr>
				</table>
			</form>
__HTML__;
}
	if(isset($_POST['check5']))
			{
				bookIssue($_POST['bookid'],$_POST['studentid']);
				bookIssueInfo($_POST['bookid']);
			}else
			{
				bookIssueForm();
	}
}

	
?>