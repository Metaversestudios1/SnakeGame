<?php //include('header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        
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
                                    <h5 class="card-title">User List</h5>
                                </div>

                                <div class="col-6 text-right">
                                    <!-- <button type="button" id="part-export" class="btn btn-primary"><i class="fa fa-file-excel-o"></i>&nbsp;Export</button> -->

                                    <a href="<?php echo base_url('add_user'); ?>" class="btn btn-primary">Add Users</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered  dtr-inline">
                                            <thead>

                                                <tr>
                                                    <th>Sr No.</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Contact Number</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($entries as $entry) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $entry['username'] ?></td>

                                                        <td><?= $entry['email'] ?></td>
                                                        <td><?= $entry['password'] ?></td>
                                                        <td><?= $entry['contact_number'] ?></td>
                                                        <td>
                                                            <?php if ($entry['status'] == '0') { ?>
                                                                <button class="btn btn-primary">
                                                                    <a onclick="if(confirm('Are you sure you want to Activate this record?')){window.location.href='<?php echo site_url('activate/' . $entry['id'] . '/user'); ?>';}">Inactive</a>
                                                                </button>
                                                            <?php } else { ?>
                                                                <button class="btn btn-success">
                                                                    <a onclick="if(confirm('Are you sure you want to Inactivate this record?')){window.location.href='<?php echo site_url('inactivate/' . $entry['id'] . '/user'); ?>';}">active</a>
                                                                </button>
                                                            <?php } ?>
                                                            <button class="btn btn-info">
                                                                <a href="<?php echo site_url('add_user/' . $entry['id']) ?>">Edit</a>
                                                            </button>
                                                            <button class="btn btn-danger">
                                                                <a onclick="if(confirm('Are you sure you want to delete this record?')){window.location.href='<?php echo site_url('delete/' . $entry['id'] . '/user'); ?>';}">Delete</a>
                                                            </button>

                                                        </td>


                                                    </tr>
                                                <?php endforeach; ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
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