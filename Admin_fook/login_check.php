<?php
  session_start();
  ?>

  

   
   <?php
   $con= mysqli_connect("localhost","root",'','db_bhn') ;
         mysqli_query($con, "SET NAMES 'utf8' "); 


      $Username = $_POST['email'];
      $Password = $_POST['pass'];
      
        $sql="SELECT * FROM tb_admin Where username='".$Username."' and password='".$Password."' ";

        $result = mysqli_query($con,$sql);
  
        if(mysqli_num_rows($result)==1){
          $row = mysqli_fetch_array($result);

          $_SESSION["username"] = $row["username"];
                if ($_SESSION["username"]){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                  Header("Location: tb_admin.php");

                }
              }
        else{
          echo "<script>";
          echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
          echo "window.history.back()";
          echo "</script>";    
        }

?>