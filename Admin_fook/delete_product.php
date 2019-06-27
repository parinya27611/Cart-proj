<?php include("con_db/connect.php");
   $id=$_GET['id'];
   $sql_product="delete from tb_product where pro_id=$id";
   $delete_pro=mysqli_query($con,$sql_product);
   echo "<script>";
   echo "alert(\" ลบข้อมูลแล้ว\");";
   echo "</script>";
   header("location: tb_product.php");
?>
