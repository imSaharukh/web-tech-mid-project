

<?php
if(!isset($_COOKIE["PHPSESSID"]))
{
  session_start();
}
?>

<h2>Welcome <?php echo $_SESSION['username']; ?></h2>


0. <a href="../view/admin.view.php">Home</a>

1. <a href="home.php">Doctors Statistics</a>2.<a href="../view/trx.view.php">Transaction History </a>3.<a href="feedback.view.php"> Feedbacks</a> 
<a href="../view/manageUsers.view.php">4. Manage user/s</a> 


<form method="post" action="../controller/logout.controller.php">
      
    <input type="submit" name="logout"
            value="logout"/>
</form>

<!-- 5. <a href="logout.php">Logout</a> -->