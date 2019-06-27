<!doctype html>
<?php
ob_start();
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
<form name="form1" method="post" action="save_checkout.php">
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
							<div class="nav-link pt-3 active" > ที่อยู่ในการจัดส่ง</div>
					</li>
					<li class="nav-item">
							<div class="nav-link pt-3 disabled"> ตรวจสอบรายการสั่งชื้อ</div>
					</li>
					<li class="nav-item">
							<div class="nav-link pt-3 disabled"> สัการชำระเงิน</div>
					</li>
					<li class="nav-item">
							<div class="nav-link pt-3 disabled" > สั่งชื้อเรียบร้อย1</div>
					</li>

			</ul>






			<div id="step-2">
					<div class="row">
							<div class="col-12 col-md-8 mt-2">
									<div class="card">
											<div class="card-header font-weight-bold">
													<h5>ที่อยู่ในการจัดส่ง</h5>
											</div>
											<div class="card-body">
													<p class="font-weight-bold">ข้อมูลผู้รับสินค้า</p>
													<form>
															<div class="form-group">
																	<label for="formGroupExampleInput1">ชื่อ-นามสกุล</label>
																	<input type="text" class="form-control" name="txtName" id="formGroupExampleInput1" required="required"
>
															</div>
															<div class="form-group">
																	<label for="exampleFormControlTextarea1">ที่อยู่</label>
																	<textarea class="form-control" name="txtAddress" id="exampleFormControlTextarea1" rows="3" required="required"
></textarea>
															</div>
															<div class="form-group">
																	<label for="exampleInputEmail1">อีเมล์</label>
																	<input type="email" class="form-control" required="required"
 name="txtEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
															</div>
															<div class="form-group">
																	<label for="formGroupExampleInput2">เบอร์ติดต่อ</label>
																	<input type="text" class="form-control" required="required"
 name="txtTel" id="formGroupExampleInput2">
															</div>
													</form>
											</div>
									</div>
							</div>
							<div class="col-12 col-md-4 mt-2">
									<div class="card">
											<div class="card-header font-weight-bold">
													<h5>สรุปรายการสินค้า</h5>
                                </div>
                                <div class="card-body">
                                    <div class="col">
                                        <div class="row mt-2">
																					<?php
																					  $Total = 0;
																					  $SumTotal = 0;

for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
{
if($_SESSION["strProductID"][$i] != "")
{
$strSQL = "SELECT * FROM tb_product WHERE pro_id = '".$_SESSION["strProductID"][$i]."' ";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
$Total = $_SESSION["strQty"][$i] * $objResult["pro_price"];
$SumTotal = $SumTotal + $Total;
$_SESSION["sumprice"] = $SumTotal;
?>
                                            <div class="col-3">
                                                <img class="w-100" src="image/<?php echo $objResult["pro_img"];?>" alt="">
                                            </div>
                                            <div class="col-8">
                                                <?php echo $objResult["pro_name"];?> <br>
                                                <?php echo $_SESSION["strQty"][$i];?> ชิ้น / <?php echo number_format($Total,2);?> บาท
                                                <hr>
                                            </div>
<?php
}
}
?>

                                        </div>
                                        <div class="text-right mt-3">
                                            <div>รวมราคาทั้งหมด <h4 class="font-weight-bold ">  <?php echo number_format($SumTotal,2);?> บาท</h4></div>
                                            <div><button type="submit" class="btn btn-secondary btn-lg">ดำเนินการต่อ</button></div>
																					</div>
																			</div>
																	</div>
															</div>
													</div>
											</div>
									</div>

							</section>
							</form>
<?php
mysqli_close ($con);
?>





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
