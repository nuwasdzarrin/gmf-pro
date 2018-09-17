<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Engineering & Maintenance GMF-Aeroasia</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/assets/adminast/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/assets/adminast/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>/assets/adminast/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>/assets/adminast/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/adminast/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>/assets/adminast/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="index.html">Welcome <?php echo $this->session->userdata('username') ?></a>
            </div>
            <!-- /.navbar-header -->
            
            <img src="<?php echo base_url();?>assets/login/GMF.png" style="width: 200px; height: 50px; margin: 10px 0 10px 200px;">
                <img src="<?php echo base_url();?>assets/adminast/report/GI.png" style="width: 100px; height: 50px; margin: 10px 0 10px 20px;">
                <img src="<?php echo base_url();?>assets/adminast/report/citilink.png" style="width: 200px; height: 50px; margin: 10px 0 10px 20px;">
            
            <ul class="nav navbar-top-links navbar-right">
                <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $this->session->userdata('username') ?></a>
                </li>
                <li><a href="<?php echo ('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li> -->
                        <li>
                            <a href="<?php echo site_url('alldata');?>"><i class="fa fa-table fa-fw"></i> All Data</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('indata');?>"><i class="fa fa-file-o fa-fw"></i> New Data</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Revisi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="sidebar-search">
                                	<div class="input-group custom-search-form">
                                        <form method="post" action="<?php echo site_url('eddata')?>" enctype="multipart/form-data">
                                            <input type="text" class="form-control" name="item_no" placeholder="Enter Camp Item...">
                                            <span class="input-group-btn">
                                             <button class="btn btn-default" type="submit">
                                                 <i class="fa fa-search"></i>
                                             </button>
                                            </span>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-trash fa-fw"></i> Delete<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="sidebar-search">
                                    <div class="input-group custom-search-form">
                                        <form method="post" action="<?php echo site_url('deldata')?>" enctype="multipart/form-data">
                                            <input type="text" class="form-control" name="item_no" placeholder="Enter Camp Item...">
                                            <span class="input-group-btn">
                                             <button class="btn btn-default" type="submit">
                                                 <i class="fa fa-search"></i>
                                             </button>
                                            </span>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>


                    <!-- <li>
                        <a href="<?php echo site_url('alldata/arsip');?>"><i class="fa fa-file-archive-o fa-fw"></i> Arsip</a>
                    </li> -->
                    <li>
                        <a href="<?php echo site_url('user');?>"><i class="fa fa-user fa-fw"></i> User</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <?php echo $contents;?>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/adminast/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>/assets/adminast/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>/assets/adminast/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>/assets/adminast/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/adminast/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/adminast/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>/assets/adminast/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>