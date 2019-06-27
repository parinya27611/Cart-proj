<?php session_start();?>
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
                                <h1>ข้อมูลแอดมิน</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                  <li><a href="#">จัดการข้อมูล</a></li>
                                    <li>แอดมิน</li>
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
                                <strong class="card-title">ข้อมูลแอดมิน</strong>
                            </div><br>
                                <table id="bootstrap-data-table" class="table order-table ov-h">
                                  <div class="col-md-12" >
                                   <p><a href="add_admin.php" class="btn btn-success" style="margin-left:1050px;">เพิ่มข้อมูล</a></p>
                                  </div>
                                    <thead>
                                        <tr>
                                            <th class="serial">ลำดับ</th>
                                            <th class="avatar">รูปภาพ</th>
                                            <th>รหัส</th>
                                            <th>ชื่อ</th>
                                            <th>ชื่อผู้ใช้</th>
                                            <th>รหัสผ่าน</th>
                                            <th>แก้ไข</th>
                                        </tr>
                                    </thead>
                                    <?php include("con_db/connect.php");
                                    $sql_admin="SELECT * FROM tb_admin";
                                    $result=mysqli_query($con,$sql_admin);
                                    $number=1;
                                    while ($arr=mysqli_fetch_array($result)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td class="serial"><?php echo $number?></td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td><?php echo $arr["admin_id"]?> </td>
                                            <td>  <span class="name"><?php echo $arr["name"]?></span> </td>
                                            <td> <span class="product"><?php echo $arr["username"]?></span> </td>
                                            <td><span class="count"><?php echo $arr["password"]?></span></td>
                                            <td>
                                              <a href="edit_admin.php?id=<?php echo $arr['admin_id']; ?>" class="btn btn-primary">แก้ไข</a>
                                                <a href="delete_admin.php?id=<?php echo $arr['admin_id']; ?>"
                                                  class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลใช่หรือไม่');">ลบ</a>
                                            </td>
                                        </tr>
                                      <?php $number++; } ?>
                                        <!-- <tr>
                                            <td class="serial">2.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5466 </td>
                                            <td>  <span class="name">Mary Silva</span> </td>
                                            <td> <span class="product">Magic Mouse</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td>
                                                <span class="badge badge-pending">Pending</span>
                                            </td>
                                        </tr> -->
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
