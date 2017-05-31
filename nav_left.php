<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar_default.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, 
                            <?php 
                            echo($display_name); 
                            
                            
                            ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <!--<div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>-->
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   
                    <ul class="sidebar-menu">
                    
                    <li class="<?php echo(activeMenu($page,'Dashboard')); ?>">
                            <a href="dashboard.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="<?php echo(activeMenu($page,'Parking Status')); ?>">
                            <a href="parkingstatus.php">
                                <i class="fa fa-truck"></i> <span>Parking Status</span>
                            </a>
                        </li>
                        <li class="<?php echo(activeMenu($page,'Parking Vehicle')); ?>">
                            <a href="parkingvehicle.php">
                                <i class="fa fa-truck"></i> <span>Parking Vehicle</span>
                            </a>
                        </li>
                        <li class="<?php echo(activeMenu($page,'Parking Vehicle')); ?>">
                            <a href="https://www.google.co.in/maps/dir///@12.9539974,77.6309395,11z" target="_blank">
                                <i class="fa fa-map-marker"></i> <span>Route</span>
                            </a>
                        </li>
                        
                       
                    </ul>
                    
                </section>
                <!-- /.sidebar -->
            </aside>