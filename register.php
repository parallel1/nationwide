<?php include('registration_processing.php');?>
<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); ?>  
</head>        
    
<body>
<?php include('header.php'); ?>
 
<header>
    <h1><span id="heading2">Register</span></h1>
</header>
 
        <div class="container-login">
    <form method= "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <?php include('errors.php'); ?>
        <div class = "form-group">
            <label>First Name</label>
            <input class="loginBox" type="text" name="firstname" required >
        </div>
        
        <div class = "form-group">
            <label>Last Name </label>
            <input class="loginBox" type="text" name="lastname" required >
        </div>
        
         <div class = "form-group">
            <label>Email </label>
            <input class="loginBox" type="email" name="email" required >
        </div>
        
         <div class = "form-group">
            <label>Password </label>
            <input class="loginBox" type="password" name="password_first"  required >
        </div>.
        
         <div class = "form-group">
            <label>Confirm Password </label>
            <input class="loginBox" type="password" name="password_second" required >
        </div> 
        
         <div class = "form-group">
            <button name="register" type="submit" class="button-logreg">Submit</button>
        </div>
        <p>
            arealdy a member? <a href="login.php">sign in </a>
        </p>    
    </form>    

</div>
</body>
</html>