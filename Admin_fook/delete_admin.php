<?php include("con_db/connect.php");
   $id=$_GET['id'];
   $sql_new="delete from tb_admin where admin_id=$id";
   $delete_new=mysqli_query($con,$sql_new);
   echo "<script>";
   echo "alert(\" ลบข้อมูลแล้ว\");";
   echo "</script>";
   header("location: tb_admin.php");
?>
