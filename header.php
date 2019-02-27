
 	<nav class="navbar navbar-default navbar-fixed-top" role ="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		
      </button>
      <a href="index.php">
      <!-- logo sourced from www.ctp.org.uk and then edited for this mock up site -->
	  <img class="navbar-brand" src="../image/nationwide-logo.png" alt="nationwide logo" width="250px;" height="60px;">
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
         <?php session_start();
         
          if(isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && $_SESSION['type']  == "admin" ){  ?>
     
        <li><a href="profile.php">welcome, Admin <?php echo $_SESSION['firstname']; ?></a></li>
         <li><a href="viewappointment.php">View Appointment</a></li>
         <li><a href="products.php">Products</a></li>
         <li><a href="contact.php">Contact Us</a></li>
         <li><a href="logout.php">Logout</a></li>
        

<?php        
 
        } else{
         
        if(isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && $_SESSION['type']  == "user" ){  ?>
     
        <li><a href="profile.php">welcome, <?php echo $_SESSION['firstname']; ?></a></li>
         <li><a href="appointment.php">Book Appointment</a></li>
         <li><a href="products.php">Products</a></li>
         <li><a href="contact.php">Contact Us</a></li>
         <li><a href="logout.php">Logout</a></li>
        

<?php        
 
        } else{
     ?>
        <li><a href="appointment.php">Book Appointment</a></li>
        <li><a href="register.php">register</a></li>
		<li><a href="login.php">login</a></li>
		<li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      <?php }
      } ?>
      </ul>
    </div>
  </div>
</nav>
