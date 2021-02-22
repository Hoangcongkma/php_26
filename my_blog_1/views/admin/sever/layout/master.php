<!DOCTYPE html>
<html lang="en">

<?php include 'views/admin/server/include/header.php'; ?>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo URL_TEMPLATE_ADMIN ?>assets/img/sidebar-1.jpg">
      <div class="logo"><a href="index.php?mod=admin&act=index&c=home" class="simple-text logo-normal">
          Trang quản lý
        </a></div>
      <?php include 'views/admin/server/include/sidebar.php'; ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include 'views/admin/server/include/navbar.php'; ?>
      <!-- End Navbar -->

      <div class="content">
        <?php require_once 'views/admin/server/'.$page.'.php' ?>
      </div>
      
      <?php include 'views/admin/server/include/main_footer.php'; ?>
    </div>
  </div>
  <?php include_once('views/admin/server/include/fix_plugin.php') ?>
  <?php include 'views/admin/server/include/footer.php'; ?>
</body>

</html>