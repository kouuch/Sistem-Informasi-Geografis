<?php 
 include '_loader.php';
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
 }
  else{
    $halaman='beranda';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">
<?php include '_layouts/head.php'?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
  include '_layouts/header.php';
  include '_layouts/sidebar.php';
  ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$judul?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active"><?=$judul?></li>
      </ol>
    </section>
<?php
  echo $content;
?>
    <!-- /.content -->
    </div>
<?php
  include '_layouts/footer.php';
  include '_layouts/javascrip.php';
?>
</div>
</body>
</html>

