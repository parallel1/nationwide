<?php 
session_start();
    include_once 'db_connect.php';
if(isset($_GET['delete'])){
    $id= $_GET['delete'];
  
    $connection->query("DELETE FROM appointments WHERE appointment_id= $id") or die ($connection->error);
}
  

 
?>
<!DOCTYPE html>
<html>
<head>
   <?php include('head.php'); ?>
</head>        
    
<body>
    <?php include('header.php'); ?>

    <div  id = "content_top" class="container">
     <form method= "post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Select your branch location</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="gridRadios1" value="melbourne" >
          <label class="form-check-label" for="gridRadios1">
            Melbourne
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="gridRadios2" value="sydney">
          <label class="form-check-label" for="gridRadios2">
            Sydney
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="gridRadios3" value="canberra" >
          <label class="form-check-label" for="gridRadios3">
            Canberra
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="location" id="gridRadios4" value="perth" >
          <label class="form-check-label" for="gridRadios4">
            Perth
          </label>
        </div>
        <button name="appoint" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
  </form> 
  <div class="row justify-content-center">
       <table class ="table">
           <thead>
               <tr>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Email</th>
                   <th>branch location</th>
                   <th>Date</th>
                   <th>Time</th>
                   <th colspan="2">Action</th>
                   
               </tr>
           </thead>
<?php
    
    if (isset($_POST['appoint'])){
    $location =  $_POST['location'];
    $sql= "SELECT * FROM appointments WHERE location = '$location'";
    $result = mysqli_query($connection,$sql);
    $unixTimestamp = time();
     while ($row = mysqli_fetch_assoc($result)) {
         $apptime= strtotime($row['timestamp']);
         $date = date('m/d/Y', $apptime);
         $time = date('G', $apptime);
         if( $apptime > $unixTimestamp){ ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $time; ?>:00</td>
                <td>
                     <a href="edit_appointment.php?edit=<?php echo $row['appointment_id']; ?>"
                     class="btn btn-info">Edit</a>
                     <a href="viewappointment.php?delete=<?php echo $row['appointment_id']; ?>"
                     class="btn btn-info">Delete</a>
                </td>    
            </tr>
             
  <?php       }
     }  
}
  ?>
  </table>
  </div>
</div>
</body>
</html>