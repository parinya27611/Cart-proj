<?php include("con_db/connect.php");

$admin_id = $_POST['admin_id'];
$admin_name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];


// if($_FILES["filUpload"]["name"] != "")
// {
//   //*** Delete Old File ***//
//     //@unlink("images/".$_POST["hdnOldFile"]);
//
//   if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../image/".$_FILES["filUpload"]["name"]))
//   {
//
//   }
// }

$strSQL = "UPDATE tb_admin SET
name='$admin_name',
username='$username',
password='$password'
WHERE admin_id = '$admin_id' ";
$query = mysqli_query($con, $strSQL);

echo "<script>";
echo "alert(\" แก้ไขข้อมูลแล้ว\");";
echo "</script>";
header("location: tb_admin.php");

?>
