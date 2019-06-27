<?php
session_start();

include("con_db/connect.php");

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO tb_order (OrderDate,Name,Address,Tel,Email,sumprice)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','".$_POST["txtAddress"]."' ,'".$_POST["txtTel"]."','".$_POST["txtEmail"]."','".$_SESSION["sumprice"]."')
  ";

   mysqli_query($con,$strSQL) ;

  $strOrderID = mysqli_insert_id($con);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO tb_orders_detail (OrderID,ProductID,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."')
			  ";
			  mysqli_query($con,$strSQL) ;
	  }
  }

mysqli_close ($con);

	for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
  	$Line = $i;
	$_SESSION["strProductID"][$Line] = "";
	$_SESSION["strQty"][$Line] = "";
  $_SESSION["sumprice"][$Line] = "";
  }

header("location:cart2.php?OrderID=".$strOrderID);
?>
