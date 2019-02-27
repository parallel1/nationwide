<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('head.php'); ?>
  </head>

  <body>
  	<?php include('header.php'); ?>

    <header>
        <h1><span id="heading2">Join Nationwide, on your side by your side</span></h1>
    </header>
    <main>
        <section>
			<h2><span id="heading2">The Nationwide Banking App gives you trusted banking anywhere anytime</span></h2>
            <p id="p1">We've been trusted by thousands of members for their banking needs since the 1880s. We've seen it all and survived it all, because we use the latest technology to change with the times and put members first.</p>
			<p id="p1">We're not a bank, we're a building society so all our profits go back to our network of members. We're trusted banking innovators and we're on your side, by your side.</p>
        </section>
		<div id="booknow" class="container-fluid">
			<div class="row">
				<div class="col-sm-2">				
				</div>
				<div class="col-sm-7">
					<h3>Need banking advice? Book an appointment with your local branch manager</h3>
				</div>
				<div class="col-sm-2">
					<form method= "post" action= "appointment.php">
					<button class="button-book" name="book" type= "submit">Book Now</button>
					</form>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
		</div>
		<!-- about section -->
		<!-- about image section -->
		<div id="about" class="container-fluid">
			<div class="row slideanim">
				<div class="col-sm-4 col-xs-12">
					<div class="popup" onclick="myFunction()">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
								<h4>&nbsp;In the 1990s recession we grew and grew&nbsp;</h4>
								<span class="popuptext" id="myPopup">We grew during the recession because we kept our borrowings low and offered members higher returns on savings.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced form www.intheblack.com and edited for this mock up site -->
							<img src="../image/5-recession.png" alt="Recession" style="width:100%;">
						</div>
					</div>
					</div>
				</div>     
				<div class="col-sm-4 col-xs-12">
					<div class="popup" onclick="myFunction1()">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
								<h4>&nbsp;&nbsp;In 2000 we introduced internet banking&nbsp;</h4>
								<span class="popuptext" id="myPopup1">We were one of the first building societies to create a secure and trusted banking app for our members.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced form www.freebcomnotes.blogspot.com and edited for this mock up site -->
							<img src="../image/6-internet.png" alt="Internet-Banking" style="width:100%;">
						</div>
					</div>
					</div>
				</div>       
				<div class="col-sm-4 col-xs-12">
					<div class="popup" onclick="myFunction2()">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h4>Today our banking app gives crypto prices</h4>
							<span class="popuptext" id="myPopup2">We are always at the forefront of financial change and now offer crypto currency prices on our app.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced form www.istockphoto.com and edited for this mock up site -->
							<img src="../image/7-app.png" alt="Crypto App Card" style="width:100%;">
						</div>
					</div>
					</div>
				</div>      
			</div>
			<div class="row slideanim">
				<div class="col-sm-4 col-xs-12">
					<div class="popup" onclick="myFunction3()">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nationwide started in the 1880s&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
							<span class="popuptext" id="myPopup3">Nationwide was created by a network of people that wanted their interests and members put before profits.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced form www.waterandpower.org and edited for this mock up site -->
							<img src="../image/2-origin.png" alt="Origin" style="width:100%;">
						</div>
					</div> 
					</div>
				</div>     
				<div class="col-sm-4 col-xs-12">
					<div class="popup" onclick="myFunction4()">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h4>We survived the depression and flourished</h4>
							<span class="popuptext" id="myPopup4">We got through the depression by helping members reduce debt and invest in proven financial products.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced from http://admiralcod.blogspot.com/2012/03/wall-street-traders.html and edited for this mock up site-->
							<img src="../image/depression.png" alt="World Wars" style="width:100;%">
						</div>
					</div> 
					</div>
				</div>       
				<div class="col-sm-4 col-xs-12">
					<div class="popup" onclick="myFunction5()">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We installed ATMs in the 1980s&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
							<span class="popuptext" id="myPopup5">We could see the benefits of accessing cash from ATMs for our members, so installed them quickly in every branch.</span>
						</div>
						<div class="panel-body">
						<!-- image sourced form www.content.time.com and edited for this mock up site -->
						<img src="../image/4-atm.png" alt="ATM" style="width:100%;">
						</div>
					</div>
					</div>
				</div>      
			</div>  
		</div>
    </main>

    <footer>
	  <div><center>Nationwide 2019 &copy</center></div>
	  <br>
      <div>Disclaimer: This website is not a real website and is being developed as part of the DIG33 course at Curtin University</div>
    </footer>
<!-- navbar sticking to the top -->
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<!-- popups over images -->
<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
function myFunction1() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}
function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
function myFunction3() {
  var popup = document.getElementById("myPopup3");
  popup.classList.toggle("show");
}
function myFunction4() {
  var popup = document.getElementById("myPopup4");
  popup.classList.toggle("show");
}
function myFunction5() {
  var popup = document.getElementById("myPopup5");
  popup.classList.toggle("show");
}
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
  </body>
</html>