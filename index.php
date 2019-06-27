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

		<link rel="shortcut icon" type="image/png" href="image/logoo.png">
		<title>ศูนย์เรียนรู้เศรษฐกิจพอเพียง บ้านโฮ่งนอก</title>
	</head>
	<body>
		<div id="cartpos">
			<div class="cartsize">
				<a href="order.php" class="btn btn-primary btn-lg active text-center" role="button" aria-pressed="true"><i class="fas fa-shopping-cart"></i><br>0</a>
			</div>
		</div>
		<div class="container">
			<header>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="image/banner1.png" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="image/banner2.png" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="image/banner.png" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</header>

			<section class="menu">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="index.php"><img src="image/logo.png"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto mr-3">
							<li class="nav-item active">
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

			<section class="about pt-5">
					<div class="row mb-2">
						<div class="col">
							<h2>เกี่ยวกับเรา</h2>
							<hr class="hr1">
						</div>
					</div>
					<div class="row py-4">
							<div class="col-12">
								<img src="image/product2.jpg" alt="">
							</div>
							<div class="col-12 text-center">
								<p>
									ศูนย์เรียนรู้เศรษฐกิจพอเพียง บ้านโฮ่งนอก ต.แม่แรม อ.แม่ริม จ.เชียงใหม่
									ผู้ใหญ่บ้านบ้านโฮ่งนอก ส่งเสริมการเรียนรู้ตามแนวทาง เศรษฐกิจพอเพียง ใช้พื้นที่ของโรงเรียนเก่า จัดทำแปลงและโรงเรือนสาธิตปลูกพืชผักไร่นาสวนผสม เลี้ยงสัตว์
									 จึงเป็นการส่งเสริมให้ชาวบ้าน ได้รู้จักการประกอบอาชีพที่ผสมผสาน โดยใช้ศูนย์ฯของหมู่บ้านเป็นแหล่งเรียนรู้ ได้รับการสนับสนุนจากเทศบาลตำบลแม่แรม เกษตรอำเภอ
									และปราชญ์ท้องถิ่น ภายในศูนย์จะส่งเสริมการเรียนรู้และสาธิตการเลี้ยงไก่ไข่ ไก่กระดูกดำ เลี้ยงกบ เลี้ยงปลา ห่าน นกกระทา การทำนาข้าว ถั่วเหลือง ผักสวนครัว
									ผักกางมุ้งปลอดสารพิษ การปลูกมะเขือญี่ปุ่น ปลูกกล้วย การเพาะถั่วงอก น้ำส้มควันไม้ การทำปุ๋ยหมัก โดยใช้สถานที่ของโรงเรียนบ้านโฮ่งนอกเดิม ที่ปิดการเรียนการสอนไปแล้ว
									มาปรับเป็นศูนย์การเรียนรู้ของหมู่บ้าน
								</p>
							</div>
					</div>
					<div class="row py-4">
							<div class="col-6">
								<p>
										นายประสงค์ คำอยู่ ผู้ใหญ่บ้าน กล่าวว่า บ้านโฮ่งนอกเป็นหมู่บ้านที่ทำการเกษตร เป็นอู่ข้าวอู้น้ำอีกแห่งหนึ่งของเชียงใหม่ มีผลผลิตทางการเกษตรป้อนสู่ตลาดอย่างต่อเนื่อง
									เช่นข้าวและผักต่างๆ	แต่ส่วนใหญ่แล้วจะเป็นการทำการเกษตรพืชชนิดเดียว หากหมดฤดูก็ต้องรอให้ถึงฤดูกาล หรือปลูกพืชชนิดอื่นหมุนเวียน ทำให้รายได้ขาดช่วงไป
									จึงได้น้อมนำแนวทางพระราชดำริ ในเรื่องของเศรษฐกิจพอเพียงมาให้ชาวบ้านได้เรียนรู้ โดยการรวมกลุ่มกันทำและต่อยอดขยายวงกว้างออกไปยังพื้นที่ของตนเอง
									นอกจากจะมีรายได้ที่เพิ่มขึ้น และหมุนเวียนตลอดทั้งปีผลพวงยังเกิดความสามัคคีของคนในหมู่บ้านอีกทางหนึ่งด้วย
								</p>
							</div>
							<div class="col-6 text-center">
									<img src="image/product1.jpg" alt="">
							</div>
						</div>
				</section>

			<section class="product pt-5">

				<div class="row mb-2">
					<div class="col">
						<h2>สินค้า</h2>
						<hr class="hr1">
					</div>
					<div class="col text-right mt-auto">
						<a href="product.php">ดูทั้งหมด</a>
					</div>
				</div>
				<div class="row text-center">
					<?php include("con_db/connect.php");
						$sql_new="SELECT * FROM tb_product order by pro_id desc";
						$result=mysqli_query($con,$sql_new);
						$number=1;
						for ($i=1;$i<=8;$i++){

$arr = mysqli_fetch_array($result);
					?>
					<div class="col-12 col-sm-6 col-lg-3 mb-4">
							<a href="detail-product.php? id=<?php echo $arr["pro_id"]; ?>">
								<img class="w-100 " src="image/<?php echo $arr["pro_img"]; ?>" alt="Card image cap">
							</a>
						<div class="title">
							<a href="detail-product.php? id=<?php echo $arr["pro_id"]; ?>">
								<h6><?php echo $arr["pro_name"]; ?></h6>
							</a>
						</div>
						<p><?php echo $arr["pro_price"]; ?> บาท</p>
					</div>
				<?php }?>
			</section>

			<section class="advertise py-5">
				<div class="row mb-2">
					<div class="col">
						<h2>ข่าวประชาสัมพันธ์</h2>
						<hr class="hr1">
					</div>
					<div class="col text-right mt-auto">
						<a href="advertise.php">ดูทั้งหมด</a>
					</div>
				</div>
				<div class="row">
					<?php include("con_db/connect.php");
						$sql_new="SELECT * FROM tb_new order by new_id desc";
						$result=mysqli_query($con,$sql_new);
						$number=1;
						for ($i=1;$i<=4;$i++){
						$arr = mysqli_fetch_array($result);
					?>
					<div class="col-12 col-sm-6 col-lg-3 my-2">
						<div class="card">
							<img class="card-img-top size" src="image/<?php echo $arr["new_img"]; ?>" alt="Card image cap">
							<div class="card-body">
								<p><?php echo $arr["new_date"]; ?></p>
								<a href="detail-advertise.php">
									<div class="title1">
										<h6>
										<?php echo $arr["new_name"]; ?>
										</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
						<?php }?>
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
