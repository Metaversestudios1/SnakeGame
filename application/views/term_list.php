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
                                        <h5 class="card-title"><?php echo 'List' ?></h5>                                       
                                    </div>
                                   
                                    <div class="col-6 text-right">
                                                                        <!-- <button type="button" id="part-export" class="btn btn-primary"><i class="fa fa-file-excel-o"></i>&nbsp;Export</button> -->
                           
                                        <a href="<?php echo base_url('add_term'); ?>" class="btn btn-primary" >Add New Terms and Conditions</a>
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
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                        <th>Action</th>
                                                           </tr>             
                                                </thead>
                                                <tbody>
                                                <?php $i=1;
                                                 foreach ($entries as $entry): ?>
                                                    <tr>
                                                    <td><?= $i++; ?></td>
                                                        <td><?=$entry['title']?></td>
                                                   
                                                        <td><?=$entry['description']?></td>
                                                      <td>
                                                        <?php if($entry['status']=='0'){?>    
                                                            <button class="btn btn-primary">
                    <a onclick="if(confirm('Are you sure you want to Activate this record?')){window.location.href='<?php echo site_url('activate/' . $entry['id'] . '/terms_conditions'); ?>';}">Inactive</a>
                </button>
                <?php }else{ ?>
                    <button class="btn btn-success">
                    <a onclick="if(confirm('Are you sure you want to Inactivate this record?')){window.location.href='<?php echo site_url('inactivate/' . $entry['id'] . '/terms_conditions'); ?>';}">active</a>
                    </button>
                    <?php }?>
                    <button class="btn btn-danger">
                    <a onclick="if(confirm('Are you sure you want to delete this record?')){window.location.href='<?php echo site_url('delete/' . $entry['id'] . '/terms_conditions'); ?>';}">Delete</a>
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
