<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include("masterpage/head.php");?>
</head>
<body>
    <!-- Left Panel -->

    <?php include("masterpage/menu.php");?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php include("masterpage/header.php");?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>ข้อมูลประชาสัมพันธ์</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                  <li><a href="#">จัดการข้อมูล</a></li>
                                    <li><a href="news.php">ประชาสัมพันธ์</a></li>
                                    <li>แก้ไขข่าว</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <?php
            $tid = $_GET['id'];
            // 1. ติดต่อฐานข้อมูล
            include("con_db/connect.php");

            // 2. ใส่โค๊ด SQL
            $sql = "select *
            FROM tb_new where new_id = $tid";
            $query = mysqli_query($con, $sql);
            ?>



    <div class="content">
    <?php
//3. วนลูปแสดง
while ($row = mysqli_fetch_array($query))
{
?>
          <form  enctype="multipart/form-data" action="edit_new_save.php"  enctype="multipart/form-data" method="post">
            <h2>แก้ไขข่าว<h2>
                <div class="form-group mt-3">
                    <h4>ชื่อข่าว<h4>
                    <input type="text" class="form-control"
                    id="exampleFormControlInput1" placeholder="ชื่อข่าว" name="new_name" value="<?php  echo $row['new_name'];  ?>">
                </div>
                <div class="form-group">
                    <h4>รายละเอียดข่าว<h4>
                    <textarea name="Detal" class="form-control" rows="7" > <?php  echo $row['new_detail'];  ?></textarea>

                </div>
                <div class="form-group">
                    <h4>วันที่ลง<h4>
                    <input type="date" class="form-control"
                    id="exampleFormControlInput1" placeholder="วันที่ลง" name="new_date" value="<?php  echo $row['new_date'];  ?>">
                </div>
                <h1>เพิ่มรูปภาพ</h1>
                <img src="../image/<?php echo $row['new_img']?>" width="250px" height="250px" ><br><br>
                 <input type="file" name="filUpload" ><br><br>
                 <input type="hidden" name="id" value="<?php echo $tid; ?>">
                <input type="submit" name="save">
                </form>
                <?php
}

// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>

</div><!-- .content -->

<div class="clearfix"></div>



</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
  } );
</script>


</body>
</html>