<?php 

session_start();
$errors = array();

if (isset($_POST['login'])){
    include_once 'db_connect.php';
    $email= mysqli_real_escape_string($connection,$_POST['email']);
    $password1= mysqli_real_escape_string($connection,$_POST['password_first']);
    
    $password=md5($password1);
    $sql= "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection,$sql);
    
    if(mysqli_num_rows($result) == 1){
        $row=mysqli_fetch_array($result);
        $_SESSION['firstname'] = $row[firstname];
  	    $_SESSION['lastname'] = $row[lastname];
  	    $_SESSION['email'] = $row[email];
  	    $_SESSION['type'] = "user";
  	    $_SESSION['success'] = "You are now logged in";
  	    header('location: index.php');
    } else{
        array_push($errors, "invalid email password combination");
       
  
    }
}
?>