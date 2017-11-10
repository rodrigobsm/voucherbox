<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="This is a simple voucher management tool with web service integration for validating vouchers.">
    <meta name="author" content="Rodrigo Santa Maria">
    <title>VoucherBox - Voucher Management Tool</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo Uri::create('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo Uri::create('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- Page level plugin CSS-->
    <link href="<?php echo Uri::create('assets/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo Uri::create('assets/css/sb-admin.css'); ?>" rel="stylesheet">
    <!-- Favicon image -->
    <link rel="icon" type="image/png" href="<?php echo Uri::create('assets/favicon.png'); ?>"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img class="img-logo"
                                                   src="<?php echo Uri::create('assets/favicon.png'); ?>">
        VoucherBox</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo Uri::create(""); ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Recipients">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Recipients</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Offers">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-shopping-bag"></i>
                    <span class="nav-link-text">Offers</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vouchers">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-ticket"></i>
                    <span class="nav-link-text">Vouchers</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="API Documentation">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-support"></i>
                    <span class="nav-link-text">API Documentation</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5">3 Recipients</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-bag"></i>
                        </div>
                        <div class="mr-5">3 Offers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-ticket"></i>
                        </div>
                        <div class="mr-5">5 Total Vouchers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-ticket"></i>
                        </div>
                        <div class="mr-5">2 Used Vouchers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row">
            <div class="col-lg-9">
                <!-- Voucher Usage by date Chart -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-area-chart"></i> Vouchers Usage by Date
                    </div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="19"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Voucher status Pie Chart -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-pie-chart"></i> Vouchers by Status
                    </div>
                    <div class="card-body">
                        <canvas id="myPieChart" width="100%" height="65"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Latest Vouchers DataTable -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-ticket"></i> Vouchers Listing
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Recipient</th>
                            <th>Offer</th>
                            <th>Only Once</th>
                            <th>Track Usage</th>
                            <th>Expiration</th>
                            <th>Usage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8A3B0F3W</td>
                            <td>Mike Johnson</td>
                            <td>Black Friday 20% OFF</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>11/02/2017</td>
                            <td>-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center text-muted">
                <small><b>VoucherBox</b> - Copyright © Rodrigo Santa Maria 2017</small>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo Uri::create('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo Uri::create('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo Uri::create('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo Uri::create('assets/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo Uri::create('assets/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo Uri::create('assets/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo Uri::create('assets/js/sb-admin.min.js'); ?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo Uri::create('assets/js/sb-admin-datatables.min.js'); ?>"></script>
    <script src="<?php echo Uri::create('assets/js/sb-admin-charts.js'); ?>"></script>
</div>
</body>

</html>
