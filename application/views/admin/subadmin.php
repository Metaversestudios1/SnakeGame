<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Subadmin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">Subadmin</li>
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
                                    <h5 class="card-title">Subadmin</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo base_url('subadmin_list'); ?>" class="btn btn-primary">Subadmin List</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="subadmin_form" method="post">
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="subadmin_username">Subadmin Username<span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Subadmin Username" value="<?php echo !empty($subadmin) ? $subadmin->username : ''; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="subadmin_password">Subadmin Password<span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" id="password" name="password" placeholder="Subadmin Password" value="<?php echo !empty($subadmin) ? $subadmin->password : ''; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="permissions">Permissions<span class="red_text">*</span></label>
                                                    <select class="form-control" id="permissions" name="permissions">
                                                        <option>Select Permission</option>
                                                        <?php if(!empty($permission)){
                                                             foreach ($permission as $permission) : ?>
                                                            <option value="<?php echo $permission['id']; ?>" <?php echo !empty($subadmin) && $subadmin->permissions == $permission['id'] ? 'selected' : ''; ?>>
                                                                <?php echo $permission['name']; ?>
                                                            </option>
                                                        <?php endforeach;
                                                        } ?>
                                                    </select>
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