<?php include("con_db/connect.php");

$id = $_GET['id'];
if(move_uploaded_file($_FILES["myFile"]["tmp_name"],"image/".$_FILES["myFile"]["name"]))
{
  $strSQL = "UPDATE tb_order SET
  imgs='".$_FILES["myFile"]["name"]."'
  WHERE order_id = '$id' ";
  $query = mysqli_query($con, $strSQL);

  header("location: cart4.php");
}


?>
