

                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-quote-left"></i><b><?php echo $totalposts; ?></b>
                                        <p class="text-muted">
                                            Number Of Posts</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $numberofusers; ?></b>
                                        <p class="text-muted">
                                           Total Users</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-map-marker "></i><b><?php echo $totalloc; ?></b>
                                        <p class="text-muted">
                                            Number of Locations Shared</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                                Total Space :   <strong><?php 
                                              $sp =   (((disk_total_space("/")/1024)/1024)/1024);
$total2 =number_format((float)$sp, 2, '.', '');
                                                 echo  $total2; ?> GB </strong> 
                                        </li>
                                        <li>
                                            <?php

    $fsp =   (((disk_free_space("/")/1024)/1024)/1024);
$ftotal2 =number_format((float)$fsp, 2, '.', '');
                                            ?>
                                            <p>
                                                <strong>Free Space</strong> <span class="pull-right small muted"><?php echo $ftotal2; ?>GB</span>
                                            </p>
                                            <div class="progress tight">
                                                <?php


                                                ?>
                                                <div class="bar" style="width: <?php echo $ftotal2; ?>%;">
                                                </div>
                                            </div>
                                        </li>
                                   
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                          
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
     