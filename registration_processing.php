<?php 

session_start();
$errors = array();

if (isset($_POST['register'])){
    include_once 'db_connect.php';
    
   
   
   
    //get data from the form
    $firstname= mysqli_real_escape_string($connection,$_POST['firstname']);
    $lastname= mysqli_real_escape_string($connection,$_POST['lastname']);
    $email= mysqli_real_escape_string($connection,$_POST['email']);
    $password1= mysqli_real_escape_string($connection,$_POST['password_first']);
    $password2= mysqli_real_escape_string($connection,$_POST['password_second']);
    
    // ensure two passwords are the same
    if ($password1 != $password2) {
	    array_push($errors, "The two passwords do not match");
    }
    
    if(!preg_match("/^[a-zA-Z]*$/", $firstname)){
        array_push($errors, "invalid first name");
    }
    
    if(!preg_match("/^[a-zA-Z]*$/", $lastname)){
        array_push($errors, "invalid last name");
    }
    
    //check if the same email has been registered
    $check_sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($connection,  $check_sql);
    $result_rows= mysqli_num_rows($result);
    
    if($result_rows > 0){
        array_push($errors, "email already exists");
    }
    
  
   
    //insert user to database if there is no error
    if (count($errors) == 0) {
  	$password = md5($password1);

  	$sql = "INSERT INTO users (firstname,lastname, email, password) 
  			  VALUES('$firstname', '$lastname', '$email', '$password')";
  	$result_123=mysqli_query($connection, $sql);
 
  	$_SESSION['firstname'] = $firstname;
  	$_SESSION['lastname'] = $lastname;
  	$_SESSION['email'] = $email;
  	$_SESSION['type'] = "user";
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
  
} 


?>