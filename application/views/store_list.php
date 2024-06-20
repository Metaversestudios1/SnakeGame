<?php //include('header.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?php echo 'List' ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><?php echo'Home'; ?></a></li>
                            <!-- <li class="breadcrumb-item active"><?php// echo lang('Parts.List'); ?></li> -->
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
                                        <h5 class="card-title"><?php echo 'Store List' ?></h5>                                       
                                    </div>
                                   
                                    <div class="col-6 text-right">
                                                                        <!-- <button type="button" id="part-export" class="btn btn-primary"><i class="fa fa-file-excel-o"></i>&nbsp;Export</button> -->
                           
                                        <a href="<?php echo base_url('add_store'); ?>" class="btn btn-primary" >Add New Store</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped  dtr-inline">
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Price</th>
            <th>Expiry Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($entries as $entry): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $entry['name'] ?></td>
                <td><?= $entry['price'] ?></td>
                
                <td><?= date('h:i A Y-m-d', strtotime($entry['expiry_date'])) ?></td>
                <td>
                    <?php if ($entry['status'] == '0'): ?>
                        <button class="btn btn-primary">
                            <a onclick="if(confirm('Are you sure you want to Activate this record?')){window.location.href='<?php echo site_url('activate/' . $entry['id'] . '/store_items'); ?>';}">Inactive</a>
                        </button>
                    <?php else: ?>
                        <button class="btn btn-success">
                            <a onclick="if(confirm('Are you sure you want to Inactivate this record?')){window.location.href='<?php echo site_url('inactivate/' . $entry['id'] . '/store_items'); ?>';}">Active</a>
                        </button>
                    <?php endif; ?>
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
