<?php session_start();
require_once('Admin_fook/mpdf/mpdf.php'); //ที่อยู่ของไฟล์ mpdf.php ในเครื่องเรานะครับ
ob_start(); // ทำการเก็บค่า html นะครับ
?>
<html lang="en">
<head>
		<title></title>
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


</head>
<body>
	<?php
	include("con_db/connect.php");

	$strSQL = "SELECT * FROM tb_order WHERE order_id = '".$_GET["OrderID"]."' ";
	$objQuery = mysqli_query($con,$strSQL) ;
	$objResult = mysqli_fetch_array($objQuery);
	?>
	<div id="step-3">
			<div class="card mt-2">
					<div class="card-header font-weight-bold">
							<h5>ตรวจสอบรายการสั่งชื้อ</h5>
					</div>
					<div class="card-body">
							ที่อยู่สำหรับจัดส่ง
							<hr>
							<table class="table table-borderless">
									<tbody>
											<tr>
													<th scope="row">ชื่อสกุล :</th>
													<td><?php echo $objResult["Name"];?></td>
											</tr>
											<tr>
													<th scope="row">ที่อยู่ :</th>
													<td>
															<?php echo $objResult["Address"];?>
													</td>
											</tr>
											<tr>
													<th scope="row">เบอร์ติดต่อ :</th>
													<td>
															<?php echo $objResult["Tel"];?>
													</td>
											</tr>
									</tbody>
							</table>
							รายการสินค้า
							<hr>
							<div class="table-responsive text-center">
									<table class="table">
											<thead class="thead-light">
													<tr>
													<th scope="col" colspan="2">สินค้า</th>
													<th scope="col">ราคา</th>
													<th scope="col">จำนวน</th>
													<th scope="col">ราคารวม</th>
													</tr>
											</thead>
											<tbody>
	<?php

	$Total = 0;
	$SumTotal = 0;

	$strSQL2 = "SELECT * FROM tb_orders_detail WHERE OrderID = '".$_GET["OrderID"]."' ";
	$objQuery2 = mysqli_query($con,$strSQL2);

	while($objResult2 = mysqli_fetch_array($objQuery2))
	{
	$strSQL3 = "SELECT * FROM tb_product WHERE pro_id = '".$objResult2["ProductID"]."' ";
	$objQuery3 = mysqli_query($con,$strSQL3);
	$objResult3 = mysqli_fetch_array($objQuery3);
	$Total = $objResult2["Qty"] * $objResult3["pro_price"];
	$SumTotal = $SumTotal + $Total;
	$sumprice =	$objResult["order_id"];

	?>
													<tr>
															<th scope="row"><img src="image/banner.png" alt=""></th>
															<td> <div class="text-left">
																	<div><?php echo $objResult3["pro_name"];?></div>
															</div>
															</td>
															<td><?php echo $objResult3["pro_price"];?> บาท</td>
															<td><?php echo $objResult2["Qty"];?> ชิ้น</td>
															<td><?php echo number_format($Total,2);?> บาท</td>
													</tr>
	<?php
	}
	?>

											</tbody>
									</table>
							</div>
							<div class="text-right mt-3">
									<div>รวมราคาทั้งหมด <h4 class="font-weight-bold "> <?php echo number_format($SumTotal,2);?> บาท</h4></div>

							</div>
					</div>
			</div>

</body>
</html>
<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4-L','0',''); //การตั้งค่ากระดาษถ้าต้องการแนวตั้ง ก็ A4 เฉยๆครับ ถ้าต้องการแนวนอนเท่ากับ A4-L
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html,2);
$pdf->Output();
?>
