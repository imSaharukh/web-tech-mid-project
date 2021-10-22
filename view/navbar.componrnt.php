

<?php
// if(!isset($_COOKIE["PHPSESSID"]))
// {
  session_start();
// }
?>

<h2>loggedin as, <?php echo $_SESSION['username']; ?></h2>




1. <a href="../view/doctorstats.view.php">Doctors Statistics</a>2.<a href="../view/trx.view.php">Transaction History </a>3.<a href="feedback.view.php"> Feedbacks</a> 
<a href="../view/manageUsers.view.php">4. Manage user/s</a> 

<a href="../view/salesreport.view.php">5. Seals Report</a> 

<a href="../view/admin.view.php">6. Prodile</a>


<form method="post" action="../controller/logout.controller.php">
      
    <input type="submit" name="logout"
            value="logout"/>
</form>

<!-- 5. <a href="logout.php">Logout</a> -->