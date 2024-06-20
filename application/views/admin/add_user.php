<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">User</li>
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
                                    <h5 class="card-title">User</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo base_url('user_list'); ?>" class="btn btn-primary">User List</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="user_form" method="post">
                                        <div class="row">

                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="time_limit">User Name<span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" id="username" name="username" value="<?php if (!empty($user)) {
                                                                                                                                echo $user->username;
                                                                                                                            } ?>" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="Username">Email <span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php if (!empty($user)) {
                                                                                                                                                    echo $user->email;
                                                                                                                                                } ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="time_limit">Contact Number<span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php if (!empty($user)) {
                                                                                                                                                    echo $user->contact_number;
                                                                                                                                                } ?>" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="form-group">
                                                    <label for="slot_fee">Password<span class="red_text">*</span></label>
                                                    <input type="text" class="form-control" name="password" id="password" value="<?php if (!empty($user)) {
                                                                                                                                        echo $user->password;
                                                                                                                                    } ?>" placeholder="Password">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row mt-3 mb-3">
                                            <!-- Additional form elements can be added here if needed -->
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <button class="btn btn-primary">Save</button>
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