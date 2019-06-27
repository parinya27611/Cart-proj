<?php
include("con_db/connect.php");
$sql_in="INSERT INTO tb_contact(contact_name,contact_email,contact_head,contact_message)
values('$_POST[contact_name]','$_POST[contact_email]','$_POST[contact_head]','$_POST[contact_message]')";
$query=mysqli_query($con,$sql_in);

 ?>
 <script type="text/javascript">
 alert("ส่งข้อมูลติดต่อสำเร็จ");
 location="contact.php";
 </script>
