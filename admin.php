<?php
session_start();
require_once('library.php');
isUser();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin ePOS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
<!--     <link href="css/plugins/morris.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>




<div id="wrapper">
        <?php
        include("header2.php");
        ?> 
      <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Menu
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Paparan</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                <!-- ADD -->
                    <div class="col-lg-3 col-md-6">
                    <a href="add-courier.php">
                        <div class="panel panel-pretty" align="center">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plus-circle fa-5x"></i>
                                    </div>
                                        <div class="huge">Tambah</div>
                                        <div>Tambah Bungkusan</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- UPDATE -->
                    <div class="col-lg-3 col-md-6">
                    <a href="courier-list.php">
                        <div class="panel panel-pink" align="center">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-pencil-square-o fa-5x"></i>
                                    </div>
                                        <div class="huge">Kemaskini</div>
                                        <div>Kemaskini Informasi</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- SCAN -->
                    <div class="col-lg-3 col-md-6">
                    <a href="scan.php">
                        <div class="panel panel-red" align="center">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-barcode fa-5x"></i>
                                    </div>
                                        <div class="huge">SCAN</div>
                                        <div>Scan Barcode</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div><!-- end of row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    <a href="search-edit.php">
                        <div class="panel panel-red" align="center">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-search fa-5x"></i>
                                    </div>
                                        <div class="huge">Carian</div>
                                        <div>Carian dan Ubah</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <!-- info pengurus -->
                    <div class="row">
                    <div class="col-lg-3 col-md-6">
                    <a href="manager-list.php">
                        <div class="panel panel-turk" align="center">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                        <div class="huge">Pengurus</div>
                                        <div>Informasi Pengurus</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- report -->
                    <div class="col-lg-3 col-md-6">
                    <a href="courier-list.php">
                        <div class="panel panel-turk" align="center">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-flag fa-5x"></i>
                                    </div>
                                        <div class="huge">REPORT</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div><!-- end of row -->

            </div><!-- end of container-fluid -->
      </div><!-- end of page-wrapper -->
      </div> <!--end wrapper -->


    <!-- INI YANG MENYEBABKAN DIA NAVBAR POPDOWN -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body></html>