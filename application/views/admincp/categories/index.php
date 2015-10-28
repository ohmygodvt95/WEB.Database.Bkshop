<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categories - Webshop</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/asset/backend/css/sb-admin-2.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="screen">
        .level-1 a:hover{
            cursor: pointer;
        }
        .level-2 a:hover{
            cursor: pointer;
        }
        .level-1 a i:hover{
            color: red;
        }
    </style>
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
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Thống kê</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-cart-plus fa-fw"></i> Order</a>
                        </li>
                        <li>
                            <a href="forms.html" class="active"><i class="fa fa-tasks fa-fw"></i> Categories</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Thêm mới sản phẩm</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Quản lý sản phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Deals</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Thêm mới user</a>
                                </li>
                                <li>
                                    <a href="login.html">Quản lý user</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới danh mục sản phẩm</h1>
                    <div class="col-sm-4">
                        <h4>Tên danh mục:</h4>
                        <input type="text" name="" value="" placeholder="Tên danh mục mới" class="form-control ten-danh-muc">
                    </div>
                    <div class="col-sm-4">
                        <h4>Loại danh mục:</h4>
                        <select name="" class="form-control loai-danh-muc">
                            <option value="1">Danh mục con</option>
                            <option value="0">Danh mục cha</option>
                        </select>
                    </div>
                    <div class="col-sm-4 category">
                        <h4>Danh mục cha:</h4>
                        <select name="" class="form-control danh-muc-cha">
                            <?php
                            foreach ($category as $key) {
                                echo '<option value="'.$key->category_id.'">'.$key->category_title.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-6 col-sm-offset-3">
                        <br>
                        <button class="btn btn-primary btn-block btn-lg">Tạo mới danh mục</button>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý danh mục sản phẩm</h1>
                    <div class="col-sm-4">
                        <h3 class="page-header text-center">Danh mục sp cấp một</h3>
                        <div class="list-group level-1">
                            <?php
                                foreach ($category as $key) {
                                    echo '<a  class="list-group-item" value="'.$key->category_id.'">'.$key->category_title.'<i class="fa fa-fw fa-trash pull-right delete" title="Xóa" value="'.$key->category_id.'"></i><i class="fa fa-fw fa-wrench pull-right edit" title="Chỉnh sửa" value="'.$key->category_id.'"></i></a>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="page-header text-center">Danh mục sp cấp hai</h3>
                        <div class="list-group level-2">
                            Hãy chọn danh mục sản phẩm cấp một
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <div class="hidden">
        <input class="base_url" type="text" name="" value="<?php echo site_url();?>" placeholder="">
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/asset/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>/asset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>/asset/backend/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>/asset/backend/js/sb-admin-2.js"></script>

    <!-- customize -->
    <script type="text/javascript" charset="utf-8" >
    jQuery(document).ready(function($) {
        var base_url = $('input.base_url').val();
        $(".loai-danh-muc").change(function(event) {
            $('.category').toggle();
        });
        $(".level-1 a").click(function(event) {
            var id = $(this).attr("value");
            $(".level-1 a").each(function(index, el) {
                $(this).removeClass('active');
            });
            $(this).addClass('active');

            $.post(base_url + "adminajax/getsubcategory/", 
                {id: id}
                , function(data, textStatus, xhr) {
                $('.level-2').html(data);
            });
        });
    });
    </script>

</body>

</html>
