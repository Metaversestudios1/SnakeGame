<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Permission</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">Permission</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title">Permission</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo base_url('permission_list'); ?>" class="btn btn-primary">Permission List</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="permission_form" method="post">
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="subadmin_username">Name<span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo !empty($permission) ? $permission->name : ''; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="subadmin_password">Description<span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo !empty($permission) ? $permission->description : ''; ?>">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-3 mb-3">
                                            <!-- Additional form elements can be added here if needed -->
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- </div> -->
                        <!-- ./card-body -->
                        <!-- <div class="card-footer">
                            </div> -->
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>

</script>