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
		<title>detail-product</title>
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
							<li class="nav-item active">
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

						<?php
						include("con_db/connect.php");
					$id = $_GET['id'];
					//3. นำคำสั่ง SQL ไปประมวลล
					$sql = "select * FROM tb_product where pro_id = $id";
					$query = mysqli_query($con, $sql);
					while ($row = mysqli_fetch_array($query)){
					?>

	<form action="order.php" method="post">
						<section class="product detail py-4 border-top">
							 <div class="card">
									 <div class="card-body">
											 <div class="row">
													<div class="col-12 col-md-4 col-lg-3">
															<img class="w-100" src="image/<?php echo $row["pro_img"]; ?>" alt="">
															<hr>
															<div class="col">
																	<div class="row">

																	</div>
															</div>
													</div>


                <div class="col-12 col-md-8 col-lg-9">
                  <h5 class="mt-3"><?php  echo $row['pro_name'];  ?></h5>
                  <hr>
                  <p class="size"><?php  echo $row['pro_detail'];  ?>
                  </p>
                  <h4><?php  echo $row['pro_price'];  ?> บาท</h4>

                  <div class="mt-3"> จำนวนสินค้า
									<input type="hidden" name="txtProductID" value="<?php echo $row["pro_id"];?>" size="2">

									<input type="text" style="text-align: center;" name="txtQty" value="1" size="2">
								  </div>

									<div class="mt-3"><input type="submit" class="btn btn-dark btn-lg btn-block" value="เพิ่มลงตะกร้า"></div>
              </div>

						<?php
							}
						?>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
										<?php
											$sql_new="SELECT * FROM tb_product order by pro_id desc";
											$result=mysqli_query($con,$sql_new);
											$number=1;
											for ($i=1;$i<=4;$i++){
											$arr = mysqli_fetch_array($result);
										?>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
											  <a href="detail-product.php? id=<?php echo $arr["pro_id"]; ?>">
													<img class="w-100 size" src="image/<?php echo $arr["pro_img"]; ?>" alt="">
												</a>
                        <div class="title">
                            <a href="detail-product.php? id=<?php echo $arr["pro_id"]; ?>">
                                <h6>	<?php echo $arr["pro_name"]; ?></h6>
                            </a>
                        </div>
                        <p>	<?php echo $arr["pro_price"]; ?>บาท</p>
                    </div>

										<?php }?>

                </div>
            </section>
	</form>

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
