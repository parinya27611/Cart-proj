<?php include("con_db/connect.php");
   $id=$_GET['id'];
   $sql_new="delete from tb_new where new_id=$id";
   $delete_new=mysqli_query($con,$sql_new);
   echo "<script>";
   echo "alert(\" ลบข้อมูลแล้ว\");";
   echo "</script>";
   header("location: news.php");
?>
