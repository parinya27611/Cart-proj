<?php include("con_db/connect.php");

$new_id = $_POST['id'];
$new_name = $_POST['new_name'];
$new_detail = $_POST['Detal'];
$new_date = $_POST['new_date'];


if($_FILES["filUpload"]["name"] != "")
{
  //*** Delete Old File ***//
    //@unlink("images/".$_POST["hdnOldFile"]);

  if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../image/".$_FILES["filUpload"]["name"]))
  {

  }
}

$strSQL = "UPDATE tb_new SET
new_name='$new_name',
new_detail='$new_detail',
new_date='$new_date',
new_img='".$_FILES["filUpload"]["name"]."'
WHERE new_id = '$new_id' ";
$query = mysqli_query($con, $strSQL);

echo "<script>";
echo "alert(\" แก้ไขข้อมูลแล้ว\");";
echo "</script>";
header("location: news.php");

?>
