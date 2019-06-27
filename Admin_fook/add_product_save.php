<?php include("con_db/connect.php");
if (isset($_POST["save"])) {

  if(move_uploaded_file($_FILES["myFile"]["tmp_name"],"../image/".$_FILES["myFile"]["name"]))
  {

  }
   $sql_product="insert into tb_product(pro_name,pro_detail,pro_price,pro_img)
   values('$_POST[pro_name]','$_POST[pro_detail]','$_POST[pro_price]','".$_FILES["myFile"]["name"]."')";
   $result_pro=mysqli_query($con,$sql_product);
   echo "<script>";
   echo "alert(\" บันทึกข้อมูลแล้ว\");";
   echo "</script>";
   header("location: tb_product.php");
}
?>
