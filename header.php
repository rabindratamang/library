<html>
<head>
<title> Hamro library </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	background:url('img/e.jpg');

}

h1{
    color:white;
    font-family:Georgia;
}
.container-fluid-text-center{
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    margin-bottom: -30%;
    transform: translate(-50%, -50%)
}
button{
   background-color:#b3c4a2; 
    border: 2px;
    border-radius:80px;
    color: black;
    padding: 55px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    font-family:georgia;
	font-style:italic;
    margin-top:150px;
	margin-right:20px;
    cursor: pointer;
 
}
  .navbar {
      padding-top: 10px;
      padding-bottom: 10px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 20px;
      letter-spacing: 5px;
      margin-bottom:30px;
  }
  
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  #lolol{
		background:white;
		border-radius:5px;
		padding: 5px;
		margin-top:30px;
	}
	#loname{
				padding:5px;
				font-size: 25px;
				font-family: georgia;
				font-color:brown;
			}
			#loname2{
				text-align:center;
				padding:20px;
				font-size: 20px;
				font-family: calibri;
				font-color:brown;
			}
			.white{
				color: #686560;
				background: #fff;
			}
			.blue{
				color: white;
				background: #686560;
			}
			p a:link{
				text-decoration : none;
				font-family: calibri;
				font-weight: bold;
			}
			#loname{
				padding:5px;
				font-size: 25px;
				font-family: georgia;
				font-color:brown;
			}

</style>
</head>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" href="style.php">Hamro Library</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="second.php">Home</a></li>
        <?php echo"<li><a href='$_SERVER[PHP_SELF]?action=logout'>Log out</a></li>";?>
       </ul>
    </div>
  </div>
</nav>