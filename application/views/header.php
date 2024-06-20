<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Pannel</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.jpg'); ?>" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- JQUERY UI  -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.css'); ?> ">

   <!-- FONT AWSOME -->
   <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?> ">

  <link rel="stylesheet" href="<?php echo base_url('assets/css/daterangepicker.css'); ?> ">

  <!-- Toastr style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?> ">

  <!-- Select2 style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist_list/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/slimselect.min.css'); ?>">
  <!-- Application style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/application.css'); ?>">

  <script>
    var base_url = '<?php echo base_url(); ?>';
  </script>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">
<?php include('pre-loader.php'); ?>
<?php include('nav-header.php'); ?>
<?php include('left-sidebar.php'); ?>
