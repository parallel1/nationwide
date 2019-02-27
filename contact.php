<?php 

session_start();
if (isset($_SESSION['errors'])) {
     $errors= $_SESSION['errors'];
    }
?>
<!DOCTYPE html>
<html>
<head>
 <?php include('head.php'); ?>
</head>        
    
<body>
    <?php include('header.php'); ?>

<header>
    <h1><span id="heading2">Contact Us</span></h1>
</header>  
    <div class="container-login">
    <form method= "post" action= "login_processing.php">
        <?php include('errors.php'); ?>
        <div class = "form-group">
            <label>Name </label>
            <input class="loginBox" type="text" name="name" required >
        </div>

        
         <div class = "form-group">
            <label>Email </label>
            <input class="loginBox" type="text" name="email" required >
        </div>
        
        <div class = "form-group">
            <label>Message </label>
            <input class="loginBox" type="text" name="message" required >
        </div>
        
      
        
         <div class = "form-group">
            <button name="login" type="login" class="button-logreg">Submit</button>
        </div>
    </form>  
    </div>
<?php

?>

</body>
</html>