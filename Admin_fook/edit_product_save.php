<?php include("con_db/connect.php");

$pro_id = $_POST['pro_id'];
$pro_name = $_POST['pro_name'];
$pro_detail = $_POST['pro_detail'];
$pro_price = $_POST['pro_price'];


if($_FILES["filUpload"]["name"] != "")
{
  //*** Delete Old File ***//
    //@unlink("images/".$_POST["hdnOldFile"]);

  if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../image/".$_FILES["filUpload"]["name"]))
  {

  }
}

$strSQL = "UPDATE tb_product SET
pro_name='$pro_name',
pro_detail='$pro_detail',
pro_price='$pro_price',
pro_img='".$_FILES["filUpload"]["name"]."'
WHERE pro_id = '$pro_id' ";
$query = mysqli_query($con, $strSQL);

echo "<script>";
echo "alert(\" แก้ไขข้อมูลแล้ว\");";
echo "</script>";
header("location: tb_product.php");

?>
