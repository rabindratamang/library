<?php

function insertstudent(){
function insertstudentData($studentid,$name,$class,$section,$age,$phone){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "insert into student (studentid,name,class,section,age,phone) values ('$studentid','$name','$class','$section','$age','$phone')";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "student has been added!";
	}
	function insertstudentForm(){
		echo<<<__HTML__
		<table>
			<form name='f2' method='post' action="$_SERVER[PHP_SELF]"></td></tr>
			<tr><td>Id : </td><td><input type='text' name='studentid'  /><tr><td>
				<tr><td>Name : </td><td><input type='text' name='name'  /><tr><td>
				<tr><td>Class : </td><td><input type='text' name='class'  /><tr><td>
				<tr><td>Section :</td><td> <input type='text' name='section'  /><tr><td>
				<tr><td>Age : </td><td><input type='text' name='age'  /><tr><td>
				<tr><td>Phone : </td><td><input type='text' name='phone'  /><tr><td>
<tr><td><input type='hidden' name='check' value='1' />
				<tr><td colspan=2><button type='submit'>Submit</button>
				</table>
			</form>
__HTML__;
	}

			if(isset($_POST['check']))
			{
				insertstudentData($_POST['studentid'],$_POST['name'],$_POST['class'],$_POST['section'],$_POST['age'],$_POST['phone']);
				insertstudentForm();
			}else
			{
				insertstudentForm();
	}
}
function modify(){
function deletestudentRow($studentid){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "delete from student where studentid=$studentid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "Data has been deleted";
	}
	function updatestudentRow($studentid){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "select * from student where studentid=$studentid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("cannot perform query ".mysqli_error($con));
		}
		$student = array();
		while($row = mysqli_fetch_assoc($result)){
			$student['name'] = $row['name'];
			$student['class'] = $row['class'];
			$student['section'] = $row['section'];
			$student['age'] = $row['age'];
			$student['phone'] = $row['phone'];
		return $student;
	}
	}
	function updatestudentForm($defaults){
		echo<<<__HTML__
			<form name='f1' method='post' action="$_SERVER[PHP_SELF]">
				Name : <input type='text' name='name' value="$defaults[name]" /><br />
				Class : <input type='text' name='class' value="$defaults[class]" /><br />
				Section : <input type='text' name='section' value="$defaults[section]" /><br />
				Phone : <input type='text' name='phone' value="$defaults[phone]" /><br />
				Age : <input type='text' name='age' value="$defaults[age]" /><br />
				<input type='hidden' name='check1' value='1' />
				<input type='hidden' name='studentid' value='$_GET[studentid]' />
				<button type='submit'>Submit</button>
			</form>
__HTML__;
	}
	function updatestudentData($studentid,$name,$class,$section,$age,$phone){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "update student set name='$name',class='$class',section='$section',age='$age',phone='$phone' where studentid=$studentid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "Data has been updated";
	}

	function modifystudent(){
	if(isset($_GET['action'])&&$_GET['action']=='update'){
		$row = updatestudentRow($_GET['studentid']);
		updatestudentForm($row);
	}elseif(isset($_GET['action'])&&$_GET['action']=='delete'){
		deletestudentRow($_GET['studentid']);
	}elseif(isset($_POST['check1'])){
		updatestudentData($_POST['studentid'],$_POST['name'],$_POST['class'],$_POST['section'],$_POST['age'],$_POST['phone']);
	}

			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
		$sql = "select * from student order by studentid";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		$colors = array("white","blue");
		$index = 0;
		echo "<table border='0.5' cellspacing='0'><tr class='blue'><th>ID</th><th>Name</th><th>Class</th><th>Section</th><th>Age</th><th>Phone</th><th>Book Issued</th><th>Deadline</th><th>Fine</th><th>Operation</th></tr>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr class='$colors[$index]'><td>$row[studentid]</td><td>$row[name]</td><td>$row[class]</td><td>$row[section]</td><td>$row[age]</td><td>$row[phone]</td><td>$row[bookid]</td><td>$row[deadline]</td><td>$row[fine]</td><td>
				<p><a href='$_SERVER[PHP_SELF]?action=update&studentid=$row[studentid]'>Update Entry</a></p>
						<p><a href='$_SERVER[PHP_SELF]?action=delete&studentid=$row[studentid]'>Delete Entry</a></p>
					</td>
				</tr>";
			$index = 1-$index;
		}
		echo"</table>";
	}
	modifystudent();
	
}
	function viewstudent(){
			$con = mysqli_connect("localhost","root","","book");if(!$con){die("Cannot connect to the database ".mysqli_error($con));}
			
		$sql = "select * from student order by studentid";

		$result = mysqli_query($con,$sql);
		if(!$result){
			die("cannot perform query ".mysqli_error($con));
		}
		$colors = array("white","blue");
		$index = 0;
		echo "<table border='0.5' cellspacing='0'><tr class='blue'><th>ID</th><th>Name</th><th>Class</th><th>Section</th><th>Age</th><th>Phone</th><th>Book Issued</th><th>Date of Issue</th><th>Deadline</th><th>Fine</th></tr>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr class='$colors[$index]'><td>$row[studentid]</td><td>$row[name]</td><td>$row[class]</td><td>$row[section]</td><td>$row[age]</td><td>$row[phone]</td><td>$row[bookid]</td><td>$row[issue]</td><td>$row[deadline]</td><td>$row[fine]</td>
				</tr>";
			$index = 1-$index;
		}
		echo"</table>";
	}
?>