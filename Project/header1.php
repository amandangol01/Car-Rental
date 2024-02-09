<?php 
session_start();
if(!isset($_SESSION['email'])){
	header("location:login.php");
}
else{
    require_once('connection.php');

    $value = $_SESSION['email'];
    $_SESSION['email'] = $value;
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);}
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Rental system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/cont.css">
	
	<head>
 
</head>
</head>
<body>
	<header>
		<a href="#home" class="logo"><img src="img/menucar.jpg"><span>KTM Wheels</span></a>
		<ul class="navbar">
			<li><a href="index1.php">Home</a></li>
			<li><a href="ride.php">Ride</a></li>
			<li><a href="service.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a id="stat" href="adminpanel/bookingstat.php">Booking Status</a></li>
		</ul>
		<div class="phello"><p class="phello">HELLO! &nbsp;<a id="pname"><?php echo $rows['FNAME']." ".$rows['LNAME']?></a></p></div>
		<div class="header-btn">
            <a href="logout.php" class="login">Logout</a>

		</div>
		
                    
	</header>