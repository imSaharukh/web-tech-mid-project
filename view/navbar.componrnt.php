

<?php
// if(!isset($_COOKIE["PHPSESSID"]))
// {
  session_start();
// }
?>

<!-- <h2>loggedin as, <?php echo $_SESSION['username']; ?></h2> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="./css/header.css">
<!-- <p style="display:inline;"><h3 style="float: left;"> </h3></p>
    <div class="hd-legal" >   
        <ul class="hd-legal-list" style="justify-content: space-between;">
            <li> <div><p style="text-align: left;">Doctor's Point</p><p>Our online Telemedicine Solutions to you</p></div> </li>
            <li><i class="fas fa-mobile fa-2x"></i> 017894565655</li>
            <li><i class="fas fa-map-marker-alt fa-2x"></i> Gulshan 1, Dhaka-1210</li>
        </ul>
    </div> -->
    
<!-- //Header -->

<!--- Navigation Bar -->
   
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700">

<nav>
	<a class="logo" href="#"><i class="fas fa-stethoscope fa-2x">   Doctor's Point</i></a>
	<ul class="nav-bar">
		<li class="nav-bar_item"><a href="../view/doctorstats.view.php">Doctors Statistics</a></li>
		<li class="nav-bar_item"><a href="../view/trx.view.php">Transaction History </a></li>
		<!-- <li class="nav-bar_item dropdown">
			<a href="#">project</a>
			<ul class="project">
				<li class="drop-item"><a href="">Work 1</a></li>
				<li class="drop-item"><a href="">Work 2</a></li>
				<li class="drop-item"><a href="">Work 3</a></li>
				<li class="drop-item"><a href="">Work 4</a></li>
				<li class="drop-item"><a href="">Work 5</a></li>
				<li class="drop-item"><a href="">Work 6</a></li>
			</ul>
		</li> -->
		<li class="nav-bar_item"><a href="feedback.view.php"> Feedbacks</a></li>
		<li class="nav-bar_item"><a href="../view/manageUsers.view.php">Manage user/s</a> </li>
		<li class="nav-bar_item"><a href="../view/admin.view.php"><?php echo $_SESSION['username']; ?></a> </li>
		<li class="nav-bar_item"><a href="../controller/logout.controller.php">Logout</a> </li>
	</ul>
</nav> 








<!-- <form method="post" action="../controller/logout.controller.php">
      
    <input type="submit" name="logout"
            value="logout"/>
</form> -->

<!-- 5. <a href="logout.php">Logout</a> -->