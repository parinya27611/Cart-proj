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
                                    <li><a href="tb_admin.php">แอดมิน</a></li>
                                    <li>เพิ่มแอดมิน</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <div class="content">
          <form  enctype="multipart/form-data" action="add_admin_save.php"  enctype="multipart/form-data" method="post">
            <h2>เพิ่มแอดมิน<h2>
                <div class="form-group mt-3">
                    <h4>ชื่อ<h4>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อ" name="name">
                </div>
                <div class="form-group">
                    <h4>ชื่อผู้ใช้<h4>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อผู้ใช้" name="username">
                </div>
                <div class="form-group">
                    <h4>รหัสผ่าน<h4>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="รหัสผ่าน" name="password">
                </div>
                <h1>เพิ่มรูปภาพ</h1>
                 <input type="file" name="filUpload" ><br><br>
                <input type="submit" name="save">
                </form>

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
