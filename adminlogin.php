<?php include('adminlogin_processing.php');?>
<!DOCTYPE html>
<html>
<head>
   <?php include('head.php'); ?>
</head>        
    
<body>
    <?php include('header.php'); ?>

<header>
    <h1><span id="heading2">login</span></h1>
</header>  
    <div class="container-login">
    <form method= "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php include('errors.php'); ?>
        <div class = "form-group">
            <label>Email </label>
            <input class="loginBox" type="text" name="email" required >
        </div>

        
         <div class = "form-group">
            <label>Password </label>
            <input class="loginBox" type="password" name="password_first" required >
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