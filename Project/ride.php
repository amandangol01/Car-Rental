<?php include("header1.php");
?>
<!--Ride-->
<?php include("Connection.php");
	$sql2="select * from cars where AVAILABLE='Y'";
    $cars= mysqli_query($con,$sql2);
	?>
	<section class="ride" id="ride">
	<h1 class="head">Our <span>Rides</span></h1>
	<div class="car">
		<div class="wrapper">
		<?php
        while($result= mysqli_fetch_array($cars))
        {
            // echo $result['CAR_ID'];
            // echo $result['AVAILABLE'];
            
    ?>
			<div class="box">
				<img src="img/<?php echo $result['CAR_IMG'];?>" alt="">
				<div class="content">
				<?php $res=$result['CAR_ID'];?>
					<h3><?php echo $result['CAR_NAME']?></h3>
					<div class="price"><span>Price: </span>Rs.<?php echo $result['PRICE']?>/day</div>
					<ul class="details">
						<li>Fuel Type: <?php echo $result['FUEL_TYPE']?></</li>
						<li>Seat Capacity: <?php echo $result['CAPACITY']?></li>
					</ul>
					<a href="adminpanel/booking.php?id=<?php echo $res;?>" class="btn">book</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	</section>
    <?php include("footer.php");?>