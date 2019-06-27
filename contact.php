<!doctype html>
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

		<link rel="shortcut icon" type="image/png" href="image/logo.png">
		<title>contact</title>
	</head>
	<body>
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
							<li class="nav-item">
								<a class="nav-link" href="product.php">สินค้า</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="advertise.php">ข่าวประชาสัมพันธ์</a>
							</li>
							<li class="nav-item active">
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

            <section class="contact py-5">
                <div class="row mb-2">
                    <div class="col">
                        <h2>ติดต่อเรา</h2>
                        <hr class="hr1">
                    </div>
                </div>
				<div class="row mt-5">
					<div class="col-12 col-lg-6">
						<p>
						ที่อยู่ : ศูนย์เรียนรู้เศรษฐกิจพอเพียง บ้านโฮ่งนอก ต.แม่แรม อ.แม่ริม จ.เชียงใหม่ 50180<br>
						เบอร์ติดต่อ : 081-8832096<br>
						อีเมล์: bhn.farm01@gmail.com
						</p>
						<iframe class="w-100 "src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.4931823304046!2d98.92522892072468!3d18.933533894921073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27c8a6d48b0c54ce!2z4Lio4Li54LiZ4Lii4LmM4LmA4Lij4Li14Lii4LiZ4Lij4Li54LmJ4Lia4LmJ4Liy4LiZ4LmC4Liu4LmI4LiH4LiZ4Lit4LiB!5e0!3m2!1sth!2sth!4v1546859924534" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-12 col-lg-6 mt-4 mt-lg-0">
						<form enctype="multipart/form-data" action="contact_add.php"  enctype="multipart/form-data" method="post">
							<div class="form-group row">
								<label class="col-md-2 col-form-label">ชื่อ :</label>
								<div class="col-md-10">
									<input type="text" class="form-control" name="contact_name">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">อีเมล์ :</label>
								<div class="col-md-10">
									<input type="email" class="form-control" name="contact_email">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">หัวข้อ :</label>
								<div class="col-md-10">
									<input type="text" class="form-control" name="contact_head">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">ข้อความ :</label>
								<div class="col-md-10">
									<textarea class="form-control"rows="4" name="contact_message"></textarea><br><br>
									<button type="submit" class="btn btn-secondary btn-lg btn-block mt-4">ส่ง</button>
								</div>
							</div>
						</form>
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
