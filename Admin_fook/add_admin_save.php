<?php include("con_db/connect.php");

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];


// if($_FILES["filUpload"]["name"] != "")
// {
//   //*** Delete Old File ***//
//     //@unlink("images/".$_POST["hdnOldFile"]);
//
//   if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../image/".$_FILES["filUpload"]["name"]))
//   {

    $strSQL = "INSERT INTO `tb_admin`( `admin_id`, `name`,`username`, `password`)
    VALUES ('','".$name."','".$username."','".$password."')";
    $query = mysqli_query($con, $strSQL);

    echo "<script>";
    echo "alert(\" บันทึกข้อมูลแล้ว\");";
    echo "</script>";
    header("location: tb_admin.php");
//   }
// }

?>
