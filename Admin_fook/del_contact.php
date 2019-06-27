<?php include("con_db/connect.php");
   $id=$_GET['id'];
   $sql_contact="delete from tb_contact where contact_id=$id";
   $delete_contact=mysqli_query($con,$sql_contact);
   echo "<script>";
   echo "alert(\" ลบข้อมูลแล้ว\");";
   echo "</script>";
   header("location: contact.php");
?>
