        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5"><h1><?=$total_recipients;?></h1> Recipients</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo Uri::create('recipients'); ?>">
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
                        <div class="mr-5"><h1>3</h1> Offers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo Uri::create('offers'); ?>">
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
                        <div class="mr-5"><h1>5</h1> Total Vouchers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo Uri::create('vouchers'); ?>">
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
                        <div class="mr-5"><h1>2</h1> Used Vouchers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<?php echo Uri::create('vouchers'); ?>">
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
                <i class="fa fa-ticket"></i> Latest Vouchers
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