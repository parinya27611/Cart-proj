<?php include("con_db/connect.php");

$new_name = $_POST['new_name'];
$new_detail = $_POST['new_detail'];
$new_date = $_POST['new_date'];


if($_FILES["filUpload"]["name"] != "")
{
  //*** Delete Old File ***//
    //@unlink("images/".$_POST["hdnOldFile"]);

  if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../image/".$_FILES["filUpload"]["name"]))
  {

    $strSQL = "INSERT INTO `tb_new`( `new_id`, `new_name`,`new_detail`, `new_date`, `new_img`) VALUES ('','".$new_name."','".$new_detail."','".$new_date."','".$_FILES["filUpload"]["name"]."')";
    $query = mysqli_query($con, $strSQL);

    echo "<script>";
    echo "alert(\" บันทึกข้อมูลแล้ว\");";
    echo "</script>";
    header("location: news.php");
  }
}

?>
