<?php
session_start();
$errors = array();


if(!isset($_SESSION['firstname'])){
    header('location: login.php');
  
}

if (isset($_POST['appoint'])){
    include_once 'db_connect.php';
    
    $location= mysqli_real_escape_string($connection,$_POST['location']);
    $date= mysqli_real_escape_string($connection,$_POST['date']);
    $start_hour= mysqli_real_escape_string($connection,$_POST['time']);
    
    $firstname= $_SESSION['firstname'];
    $lastname= $_SESSION['lastname'];
    $email= $_SESSION['email'];
    $time_sql = mktime ( $start_hour, 0, 0, date("n",$date) , date("j",$date) , date("Y",$date)  );
    
    $time_for_table= date('Y-m-d H:i:s', $time_sql);
    $sql= "SELECT * FROM appointments WHERE location = '$location' AND timestamp = '$time_for_table'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 4){
    
        array_push($errors, "appointment time not available, please select another time.");
    }
    
    $sql= "SELECT * FROM appointments WHERE email = '$email' AND timestamp = '$time_for_table' AND location = '$location'";
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) >= 1){
    
        array_push($errors, "you already made the same appointment.");
    }
    
    if (count($errors) == 0) {
  	

  	$sql = "INSERT INTO appointments (firstname,lastname, email,location, timestamp) 
  			  VALUES('$firstname', '$lastname', '$email', '$location', '$time_for_table')";
  	$result_123=mysqli_query($connection, $sql);
  
    $_SESSION['location'] = $location;
    $_SESSION['date'] = $time_sql;
    $_SESSION['time'] = $start_hour;
  	$_SESSION['book'] = "You are now booked";
  	header('location: confirmation.php');
  }
  }
?>
<!DOCTYPE html>
<head>
<?php include('head.php'); ?>    
</head>
<body>
    <?php include('header.php'); ?>
    <div  id = "content_top" class="container">
    <h1>appointment</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php include('errors.php'); ?>
    <p>branch location</p>
    <input type="radio" name="location" value="melbourne" checked> Melbourne
    <input type="radio" name="location" value="sydney"> Sydney<br>
    <input type="radio" name="location" value="canberra"> Canberra
    <input type="radio" name="location" value="perth"> Perth<br>
    <p>appointment date</p>
    <select name="date" size="5">
    <?php
    for($x=1; $x<=7 ; $x++) {
        $time_stamp=time()+($x*24*60*60);
        if(date(N, $time_stamp)!= 6 && date(N, $time_stamp)!= 7) {?>
           <option value="<?php echo $time_stamp; ?>"><?php echo date("j, n, Y", $time_stamp); ?></option> 
        <?php  } ?>
         <?php } ?>>
    </select>
       
    <p>appointment time</p>
    
    <select name="time" size="8">
        <option value="9">9 AM</option>
        <option value="10">10 AM</option>
        <option value="11">11 AM</option>
        <option value="12">12 PM</option>
        <option value="13">1 PM</option>
        <option value="14">2 PM</option>
        <option value="15">3 PM</option>
        <option value="16">4 PM</option>
        <option value="17">5 PM</option>
        
    </select> </br>
    <button name="appoint" type="submit" class="btn">Submit</button>
</form>
</div>
</body>
</html>