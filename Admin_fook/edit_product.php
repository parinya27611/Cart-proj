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
                                <h1>ข้อมูลสินค้า</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                  <li><a href="#">จัดการข้อมูล</a></li>
                                    <li><a href="tb_product.php">สินค้า</a></li>
                                    <li>แก้ไขสินค้า</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <?php
            $product = $_GET['id'];
            // 1. ติดต่อฐานข้อมูล
            include("con_db/connect.php");

            // 2. ใส่โค๊ด SQL
            $sql = "select *
            FROM tb_product where pro_id = $product";
            $query = mysqli_query($con, $sql);
            $arr_pro=mysqli_fetch_array($query);
            ?>



    <div class="content">
          <form  enctype="multipart/form-data" action="edit_product_save.php"  enctype="multipart/form-data" method="post">
            <h2>แก้ไขสินค้า<h2>
                <div class="form-group mt-3">
                    <h4>ชื่อสินค้า<h4>
                    <input type="text" class="form-control"
                    id="exampleFormControlInput1" placeholder="ชื่อสินค้า" name="pro_name" value="<?php  echo $arr_pro['pro_name'];  ?>">
                </div>
                <div class="form-group">
                    <h4>รายละเอียดสินค้า<h4>
                    <textarea name="pro_detail" class="form-control" rows="7" > <?php  echo $arr_pro['pro_detail'];  ?></textarea>

                </div>
                <div class="form-group">
                    <h4>ราคาสินค้า<h4>
                    <input type="number" class="form-control"
                    id="exampleFormControlInput1" placeholder="ราคาสินค้า" name="pro_price" value="<?php  echo $arr_pro['pro_price'];  ?>">
                </div>
                <h1>เพิ่มรูปภาพ</h1>
                <img src="../image/<?php echo $arr_pro['pro_img']?>" width="250px" height="250px" ><br><br>
                 <input type="file" name="filUpload" ><br><br>
                 <input type="hidden" name="pro_id" value="<?php echo $product; ?>">
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
