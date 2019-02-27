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
    <h1><span id="heading2">Products</span></h1>
</header> 
<section>
    <!-- AngularJS application -->
    <div data-ng-app="" data-ng-init="quantity=1000;price=2.3">
         <h3>Use our savings interest rate calculator to see how much interest you can earn</h3>
           <center>Deposit Amount $: <input type="number" ng-model="quantity"></center>
           <center>Interest Rate %pa: <input type="number" ng-model="price"></center>
        <center><p><b>Total interest earned $:</b> {{quantity * price / 100}}</p></center>
    </div>
</section> 
<div id="about" class="container-fluid">
			<div class="row slideanim">
				<div class="col-sm-4 col-xs-12">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
								<h4>&nbsp;Flex Basic&nbsp;</h4>
								<span class="popuptext" id="myPopup">Our standard account for over 18s with no bank charges and for people that do most of their banking online. Earn 2.3% interest for deposits over $1000.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced from https://www.nationwide.co.uk/products/current-accounts/our-current-accounts/overview and edited for this mock up site -->
							<img src="../image/flexbasic.png" alt="Recession" style="width:100%;">
						</div>
					</div>
				</div>     
				<div class="col-sm-4 col-xs-12">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
								<h4>&nbsp;&nbsp;Flex One&nbsp;</h4>
								<span class="popuptext" id="myPopup1">Our account for young people aged between 11 to 17 years of age. No bank charges. Earn 1% interest for deposits up to $1000.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced from https://www.nationwide.co.uk/products/current-accounts/our-current-accounts/overview and edited for this mock up site -->
							<img src="../image/flexone.png" alt="Internet-Banking" style="width:100%;">
						</div>
					</div>
				</div>       
				<div class="col-sm-4 col-xs-12">
					<div class="panel panel-default text-center">
						<div class="panel-heading">
							<h4>Flex Student</h4>
							<span class="popuptext" id="myPopup2">Our student account for over 18s. Includes an overdraft facility and earn 2.3% interest for deposits over $1000.</span>
						</div>
						<div class="panel-body">
							<!-- image sourced from https://www.nationwide.co.uk/products/current-accounts/our-current-accounts/overview and edited for this mock up site -->
							<img src="../image/flexstudent.png" alt="Crypto App Card" style="width:100%;">
						</div>
					</div>
				</div>      
			</div>
</body>
</html>