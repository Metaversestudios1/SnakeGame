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


<?php include('nav-footer.php'); ?>
</div>
<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>

<!-- jQuery UI-->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Moment -->
<script src="<?php echo base_url('assets/js/moment.min.js'); ?>"></script>
<!-- Datetime picker -->
<script src="<?php echo base_url('assets/js/daterangepicker.min.js'); ?>"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist_list/js/adminlte.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url('assets/plugins/jquery-mousewheel/jquery.mousewheel.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-mapael/jquery.mapael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-mapael/maps/usa_states.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>

<!-- Toastr -->
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>

<!-- Select2 -->
<script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>

<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php //echo base_url('assets/dist_list/js/demo.js'); ?>"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url('assets/dist/js/pages/dashboard2.js'); ?>"></script> -->

<!-- Jquery validations -->
<script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js'); ?>"></script>

<!-- Application Javascript File -->
<script  src="<?php echo base_url('assets/js/file_upload.js'); ?>"></script>
<script  src="<?php echo base_url('assets/js/slimselect.min.js'); ?>"></script>

<script type="module" src="<?php echo base_url('assets/js/application.js'); ?>"></script>
<script>
        $(document).ready(function() {
            $("#flashMessage").delay(3000).fadeOut("slow"); // Fade out after 3000 milliseconds (3 seconds)
        });
    </script>
</body>
</html>
