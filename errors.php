<?php 
session_start();
if(isset($_SESSION['errors'])){
  $_SESSION['errors']= "";
  }
if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

<?php

?>