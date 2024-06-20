<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In | Admin Pannel</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.jpg'); ?>" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?> ">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Toastr style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist_list/css/adminlte.min.css'); ?>">

  <!-- Application style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/application.css'); ?>">
  <script>
    var base_url = '<?php echo base_url(); ?>';
  </script>
</head>
<body class="hold-transition login-page">

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Toastr -->
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/moment.min.js'); ?>"></script>
<!-- Datetime picker -->
<script src="<?php echo base_url('assets/js/daterangepicker.min.js'); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist_list/js/adminlte.min.js'); ?>"></script>
<!-- Jquery validations -->
<script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js'); ?>"></script>
<!-- Application Javascript File -->
<script type="module" src="<?php echo base_url('assets/js/application.js'); ?>"></script>
<?php if ($this->session->flashdata('success_message')) : ?>
    <div id="flashMessage" class="alert alert-success" style="position: fixed; top: 66px; right: 10px; z-index: 1000;">
        <?= $this->session->flashdata('success_message') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif ($this->session->flashdata('danger_message')) : ?>
    <div id="flashMessage" class="alert alert-danger" style="position: fixed; top: 66px; right: 10px; z-index: 1000;">
        <?= $this->session->flashdata('danger_message') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
