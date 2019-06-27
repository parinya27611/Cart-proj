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
                                    <li class="active">ประชาสัมพันธ์</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">ประชาสัมพันธ์</strong>
                            </div><br>
                                <table id="bootstrap-data-table" class="table order-table ov-h">
                                  <div class="col-md-12" >
                                    <p><a href="add_news.php" class="btn btn-success" style="margin-left:1050px;">เพิ่มข้อมูล</a></p>
                                 </div>
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">รูปภาพ</th>
                                            <!-- <th>วันที่</th> -->
                                            <th>หัวข้อ</th>
                                            <th>รายละเอียด</th>
                                            <th>วันที่ลง</th>
                                            <th>แก้ไข</th>
                                        </tr>
                                    </thead>
                                    <?php include("con_db/connect.php");
                                    $sql_new="SELECT * FROM tb_new";
                                    $result=mysqli_query($con,$sql_new);
                                    $number=1;
                                    while ($arr=mysqli_fetch_array($result)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td class="serial"><?php echo $number; ?></td>
                                            <td class="avatar">
                                                <div class="round-img" align="center">
                                                  <?php if (empty($arr['new_img'])) {
                                                    echo "ไม่มีรูปภาพ";
                                                  } ?>
                                                  <img class="rounded" src="../image/<?php echo $arr["new_img"]; ?>" alt="" height="90" width="100" >
                                                    <!-- <a href="#"><img class="rounded-circle" src="../image/<?php echo $arr["new_img"]; ?>" alt="" height="50" width="50" ></a> -->
                                                </div>
                                            </td>
                                            <td>  <span class="name"><?php echo $arr["new_name"]; ?></span> </td>
                                            <td><textarea rows="3" cols="20"><?php echo $arr["new_detail"]; ?></textarea> </td>
                                            <td><span class="name"><?php echo $arr["new_date"]; ?></span></td>
                                            <td>
                                             <a href="edit_news.php?id=<?php  echo $arr['new_id']; ?>"> <span class="btn btn-primary">แก้ไข</span></a>

                                              <a href="delete_news.php?id=<?php echo $arr["new_id"]; ?>"
                                                class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลใช่หรือไม่')">ลบ</a>
                                            </td>
                                        </tr>
                                        <?php $number++; } ?>
                                    </tbody>
                                </table><br>
                        </div>
                    </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

<?php include("masterpage/footer.php");?>

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
