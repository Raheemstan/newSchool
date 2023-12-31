<?php
$page = "Home";
include('menu.php');
?>
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Admin Dashboard</h3>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>Admin</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Dashboard summery Start Here -->
<div class="row gutters-20">
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-green ">
                        <i class="flaticon-classmates text-green"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Students</div>
                        <div class="item-number"><span class="counter" data-num="150000">1,50,000</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-blue">
                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Teachers</div>
                        <div class="item-number"><span class="counter" data-num="2250">2,250</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="item-icon bg-light-red">
                        <i class="flaticon-money text-red"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-content">
                        <div class="item-title">Earnings</div>
                        <div class="item-number"><span>$</span><span class="counter" data-num="193000">1,93,000</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard summery End Here -->
<!-- Dashboard Content Start Here -->
<div class="row gutters-20">

    <div class="col-12 col-xl-6 col-3-xxxl">
        <div class="card dashboard-card-three pd-b-20">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Students</h3>
                    </div>
                </div>
                <div class="doughnut-chart-wrap">
                    <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                </div>
                <div class="student-report">
                    <div class="student-count pseudo-bg-blue">
                        <h4 class="item-title">Female Students</h4>
                        <div class="item-number">45,000</div>
                    </div>
                    <div class="student-count pseudo-bg-yellow">
                        <h4 class="item-title">Male Students</h4>
                        <div class="item-number">1,05,000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6 col-4-xxxl">
        <div class="card dashboard-card-four pd-b-20">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Event Calender</h3>
                    </div>
                </div>
                <div class="calender-wrap">
                    <div id="fc-calender" class="fc-calender"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Content End Here -->
<?php
include('footer.php');
