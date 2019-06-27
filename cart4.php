<!doctype html>
<?php
session_start();
?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/fontawesome-free-5.0.12/web-fonts-with-css/css/fontawesome-all.min.css">

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js" ></script>
		<script type="text/javascript">
			var name = "#cartpos";
			var locateY= null;
			$(function(){
				locateY=parseInt($(name).css("top").replace("px",""));
				$(window).scroll(function(){
					offset=locateY+$(document).scrollTop()+"px";
					$(name).animate({top:offset},{duration:1000,queue:false});
				});
			});
        </script>
        <script src="js/formcart.js"></script>

		<link rel="shortcut icon" type="image/png" href="image/logo.png">
		<title>cart</title>
	</head>
	<body>
<?php
include("con_db/connect.php");
?>

		<div id="cartpos">
			<div class="cartsize">
				<a href="cart.php" class="btn btn-primary btn-lg active text-center" role="button" aria-pressed="true"><i class="fas fa-shopping-cart"></i><br>0</a>
			</div>
		</div>
		<div class="container">

			<section class="menu">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.php"><img src="image/logo.png"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto mr-3">
							<li class="nav-item">
								<a class="nav-link" href="index.php">หน้าหลัก<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="product.php">สินค้า</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="advertise.php">ข่าวประชาสัมพันธ์</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">ติดต่อเรา</a>
							</li>
						</ul>
						<img class="mr-1" src="image/icon-facebook.png" alt="">
						<img class="mr-1" src="image/icon-instagram.png" alt="">
						<img class="mr-1" src="image/icon-line.png" alt="">
						<img class="mr-1" src="image/icon-twitter.png" alt="">
					</div>
				</nav>
			</section>

            <section class="cart py-4">
                <div class="row mb-2">
                    <div class="col">
                        <h2>ตะกร้าสินค้า</h2>
                        <hr class="hr1">
                    </div>
                </div>
                <ul class="nav nav-pills nav-fill mb-3">
									<li class="nav-item">
											<div class="nav-link pt-3 btn-secondary"> ตะกร้าสินค้า</div>
									</li>
									<li class="nav-item">
											<div class="nav-link pt-3 btn-secondary" > ที่อยู่ในการจัดส่ง</div>
									</li>
									<li class="nav-item">
											<div class="nav-link pt-3 btn-secondary"> ตรวจสอบรายการสั่งชื้อ</div>
									</li>
									<li class="nav-item">
											<div class="nav-link pt-3 btn-secondary"> การชำระเงิน</div>
									</li>
									<li class="nav-item">
											<div class="nav-link pt-3 active" > สั่งชื้อเรียบร้อย1</div>
									</li>

                </ul>


                <div id="step-5">
                    <div class="card mt-2">
                        <div class="card-body text-center">
                            <img src="image/checked.png" alt=""> <h2 class="mt-3">สั่งชื้อเรียบร้อย กรุณารอเจ้าหน้าที่ติดต่อกลับทางอีเมล์</h2>
                    </div>
                </div>
            </section>

			<footer class="py-3">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-4 col-md-6 logo my-auto text-sm-left text-center pb-sm-0 pb-3">
							<a >
								<img src="image/logo.png" >
							</a>
						</div>
						<div class="col-12 col-sm-8 col-md-6 text-sm-right text-center">
							<div class="col-12 mx-auto" style="line-height: 30px;">
								<a href="index.php">หน้าหลัก</a> |
								<a href="product.php"> สินค้า</a> |
								<a href="advertise.php"> ข่าวประชาสัมพันธ์</a> |
								<a href="contact.php"> ติดต่อเรา</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</body>
</html>
