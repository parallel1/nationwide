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
    <p>User profile</p>
    
    <ul class="list-group">
  <li class="list-group-item">First Name: <?php echo $_SESSION['firstname']; ?></li>
  <li class="list-group-item">Family Name: <?php echo $_SESSION['lastname']; ?></li>
  <li class="list-group-item">Email: <?php echo $_SESSION['email']; ?></li>
 
  </ul>
  <p>User appointment </p>
  <?php
  include_once 'db_connect.php';
  $email=$_SESSION['email'];
  $sql= "SELECT * FROM appointments WHERE email = '$email'";
  $result = mysqli_query($connection,$sql);
  if(mysqli_num_rows($result) == 0){ ?>
      <p> you have no appointment.</p>
 <?php } else{
      $unixTimestamp = time(); ?>
       <p>previous appointment </p> 
<?php      while ($row = mysqli_fetch_assoc($result)) {
          $apptime= strtotime($row['timestamp']);
          if( $apptime <= $unixTimestamp){ ?>
            
            <ul class="list-group">
          <li class="list-group-item">Location: <?php echo $row['location']; ?></li>
          <li class="list-group-item">Date: <?php echo date('m/d/Y', $apptime); ?></li>
          <li class="list-group-item">Time: <?php echo date('G', $apptime); ?>:00</li>
 
          </ul>
    <?php      }
          //display upcoming appointments 
          if( $apptime > $unixTimestamp){ ?>
          <p>upcoming appointment </p> 
          <ul class="list-group">
          <li class="list-group-item">Location: <?php echo $row['location']; ?></li>
          <li class="list-group-item">Date: <?php echo date('m/d/Y', $apptime); ?></li>
          <li class="list-group-item">Time: <?php echo date('G', $apptime); ?>:00</li>
 
          </ul>
              
    <?php      }
      }   
     
 
 }
  ?>
   
    </div>
</body>
</html>