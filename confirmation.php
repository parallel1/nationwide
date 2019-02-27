<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <?php include('head.php'); ?>
</head>        
    
<body>
    <?php include('header.php'); ?>

    <div  id = "content_top" class="container">
    <p>Booking successful</p>
    <ul class="list-group">
          <li class="list-group-item">Location: <?php echo $_SESSION['location'] ; ?></li>
          <li class="list-group-item">Date: <?php echo date("j, n, Y" , $_SESSION['date']) ; ?></li>
          <li class="list-group-item">Time:  <?php echo $_SESSION['time'] ; ?>:00</li>
    </ul>
    
   
   
    </div>
</body>
</html>