<?php 
session_start();?>
<html>
<head>
<title> Hamro library </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.jumbotron {
      margin-bottom: 0;
      font-family:Georgia;
    }
 .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

.footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
.carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
    }
.register{
		  border:solid gray 3px;
      border-radius:10px;
      background:url(img/c.jpg);
      color:white;
      width: 75%;
      height:95%;
      text-align:center;
      margin-left:15%;
      margin-right:20 %;
      margin-top:7%;
      margin-bottom:7%;



  }
  .register form table{
      text-align: center;
      border-radius:10px;
      margin:20px auto; 
   

  }
 .register form table tr{
    
      color:white;
      font-size:23px;
      font-family:georgia;
      text-shadow: 2px 2px 4px #afacac;
      font-style:italic;
      padding-top:50px;
      padding-left:30%;
      margin-left: 50px;
    }
  .register input{
     border-radius:10px;
      margin-top:20px;
      margin-left:20px;
      padding:10px;
      background-color:#e2d6c3;
      color:black;
  }


  }

.image-container{
    width: 1360px;
    height: 1460px;
    background:url(img/c.jpg);
    }

.login{
		  border:solid gray 3px;
      border-radius:10px;
      background:url(img/c.jpg);
      width: 70%;
      height:35%;
      text-align: center;
      margin-left:15%;
      margin-bottom:7%;
      margin-top:1%;
  } 
   
    .login form table{
     
      text-align: center;
      border-radius:10px;
      margin:20px auto;  

    }
    
    .login form table tr{
      padding-top:50px;
      color:white;
      text-shadow: 2px 2px 2px #afacac;
      font-size:23px;
      font-family:georgia;
      font-style:italic;
      
    }
    input{
      border-radius:10px;
      margin-top:20px;
      padding:10px;
      background-color:#e2d6c3;
      color:black;
    }
    .bg1{
      background:url('img/g.jpg');


    }
    .bg{
      background:url('img/f.jpg');
;
    }
#info{
	background-color:white;
}
  
  
    
</style>
</head>
<body>
	<div class="jumbotron">
		<div class="container text-center">
		<H1> हाम्रो LIBRARY </H1>
		<p> Today a reader, Tomorrow a leader. </p>
	</div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Hamro </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="about.php">About</a></li>
   
        <li><a href="book.pdf" download>Online pdfs</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><i class="fas fa-sign-in-alt"></i><a href="#log">Log in</a></li>
        <li><a href="#reg"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- yo indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- slides ko lai wrappers -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/a.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>BROWSE</h3>
          <p>Happy Browsing</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/b.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>AND LEARN</h3>
          <p>Happy Learning</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
    <div class="bg">

    <div class="container text-center">
    <h3> Start here </h3><br>
    <blockquote>Log in</blockquote>
    <div class="login">
    <div id="log" class="section-login-padding">
    <div class="col-md-12">
    <?php
function displayLogin(){
	echo <<< HTML
	<form name='login' method ='post' action ='$_SERVER[PHP_SELF]'>
		<table>
			<tr><td>Username :</td><td> <input type='text' name='username' /></td></tr>
		<tr><td>Password :</td><td> <input type='password' name='password' /></td></tr>
		<tr><input type='hidden' name='check1' value='1' /><tr>
		     <tr><td><center><button type="submit">Login</button></center></td></tr> 
		</table>
	</form>
HTML;
}

function validateLogin($username,$password){
	$user = array();
	$con = mysqli_connect("localhost","root","","register");
	
	if(!$con){
		die("Cannot connect to server ".mysqli_connect_error());
	}
	$query = mysqli_query($con,"select * from register where (username='$username' and password='$password')");
	
	if(!$query){
		die("cannot perform query".mysqli_error($con));
	}
	while($row = mysqli_fetch_assoc($query)){
		$user = $row;
	}
	return $user;	
}	
						if(isset($_POST['check1'])){
				if($user = validateLogin($_POST['username'],$_POST['password'])){
					$_SESSION['user'] = $user;
					echo '<meta http-equiv="refresh" content="0;url=second.php" />';
			}
				else{
					echo"<div id='info'>Invalid Username or password</div>";
					displayLogin();
				}
			}
			else{
				displayLogin();
			}
		?>
		</div>
		</div>
	</div>
  </div>
  </div>
	
  <div class="bg1">
  <div class="container text-center">
  <div class="register">
  <h3>Please register first to be a part of this library!</h3>
  <div id="reg" class="section-register-padding">
  <div id="col-md-12">
  	<?php
	function insertData($username,$fname,$lname,$password,$address,$age,$phone){
		$con = mysqli_connect("localhost","root","","register");
		if(!$con){
			die("Cannot connect to the database ".mysqli_error($con));
		}
		$sql = "insert into register (username,fname,lname,password,address,age,phone) values ('$username','$fname','$lname','$password','$address','$age','$phone')";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "<div id='lolol'>You have been registered.</div>";
	}
	function showForm(){
		echo<<<__HTML__
			<form name='f1' method='post' action="$_SERVER[PHP_SELF]">
			<table>
				<tr><td>Username :</td><td> <input type='text' name='username' /></td></tr>
				<tr><td>First Name :</td><td> <input type='text' name='fname' /></td></tr>
				<tr><td>Last Name :</td><td> <input type='text' name='lname' /></td></tr>
				<tr><td>Password :</td><td> <input type='text' name='password' /></td></tr>
				<tr><td>Address :</td><td> <input type='text' name='address' /></td></tr>
				<tr><td>Age :</td><td> <input type='text' name='age' /></td></tr>
				<tr><td>Phone :</td><td> <input type='text' name='phone' /></td></tr>
				<input type='hidden' name='check' value='1' />
          <tr><td><center><button type="submit">Register</button></center></td></tr>
				</table>
			</form>
__HTML__;
	}
?>
	
		<?php
			if(isset($_POST['check']))
			{
				insertData($_POST['username'],$_POST['fname'],$_POST['lname'],$_POST['password'],$_POST['address'],$_POST['age'],$_POST['phone']);
				showForm();
			}else
			{
				showForm();
			}

		?>

</div>
</div>
</div>
</div>
</div>
<!-- <div class="footer"><p> hamrolibray@co.ltd</p></div> -->
</body>
</html>