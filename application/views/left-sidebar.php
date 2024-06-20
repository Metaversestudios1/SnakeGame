<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <!-- <img src="<?php echo base_url('assets/img/Mahindra_Logo_hor.jpg'); ?>" alt="Mahindra Logo" class="brand-image elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Admin Pannel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
       
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             
                <li class="nav-item">
                    <a href="#" class="nav-link <?php // echo isset($current_page_url['segment'][0]) && $current_page_url['segment'][0]=='admin' && in_array($current_page_url['segment'][1], ['parts']) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-car"></i>
                        <p>
                            Admin
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">5</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('subadmin'); ?>" class="nav-link <?php //echo $current_page_url['path'] == 'admin/parts/list'?'active':''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subadmin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('subadmin_list'); ?>" class="nav-link <?php //echo $current_page_url['path'] == 'admin/parts/add'?'active':''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subadmin List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('permission'); ?>" class="nav-link <?php //echo $current_page_url['path'] == 'admin/parts/list'?'active':''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Permission</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('permission_list'); ?>" class="nav-link <?php //echo $current_page_url['path'] == 'admin/parts/add'?'active':''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Permission List</p>
                            </a>
                        </li>
                    </ul>
                </li>  
                <li class="nav-item">
                    <a href="#" class="nav-link <?php //echo isset($current_page_url['segment'][0]) && $current_page_url['segment'][0]=='admin' && in_array($current_page_url['segment'][1], ['jobs']) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                            <!-- <span class="badge badge-info right">5</span> -->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('add_user'); ?>" class="nav-link <?php //echo $current_page_url['path'] == 'jobs/left_job'?'active':''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('user_list'); ?>" class="nav-link <?php //echo $current_page_url['path'] == 'jobs/left_job'?'active':''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p> User List</p>
                            </a>
                        </li>
                       
                        
                    </ul>
                </li>
                     
                           
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>