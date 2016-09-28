<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Logistik Ikan Tangkap</title> 

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>  

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

     <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php

$level="";
if(!empty($_SESSION['nama'])){
    $level=$_SESSION['pref'];
    $sektor=$_SESSION['idsk'];
}
if($level=='tpi'){ ?>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="modul.php?isi=awal">Sistem Informasi Logistik Ikan Tangkap - Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <?php echo $_SESSION['nama']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="modul.php?isi=tabel1"><i class="fa fa-anchor fa-fw"></i> Laporan Penagkapan</a>
                        </li>
                        <li>
                            <a href="modul.php?isi=tabel2"><i class="fa fa-user fa-fw"></i> Laporan Pelelangan</a>
                        </li> 
                        <li>
                            <a href="modul.php?isi=tabel3"><i class="fa fa-money fa-fw"></i> Laporan Pedagang</a>
                        </li>                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    </nav>
<?php } //if privilage tpi
else if($level=='admin'){ ?>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="modul.php?isi=prof_mar">Sistem Informasi Logistik Ikan Tangkap - Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <?php echo $_SESSION['nama']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="modul.php?isi=prof_mar"><i class="glyphicon glyphicon-signal"></i> Profit Margin</a>
                        </li>
                        <li>
                            <a href="modul.php?isi=tabel_n"><i class="fa fa-anchor fa-fw"></i> Data Nelayan</a>
                        </li> 
                        <li>
                            <a href="modul.php?isi=tabel_pk"><i class="fa fa-user fa-fw"></i> Data Pemilik Kapal</a>
                        </li>
                        <li>
                            <a href="modul.php?isi=tabel_pd"><i class="fa fa-money fa-fw"></i> Data Pedagang</a>
                        </li>
                        <li>
                            <a href="modul.php?isi=tabel_sk"><i class="fa fa-map-marker fa-fw"></i> Data Sektor</a>
                        </li>                         
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    </nav>

<?php } else { ?>
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistem Informasi Logistik Ikan Tangkap</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="login.php"><i class="fa fa-sign-in fa-fw"></i> Login</a>                
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
                            <a href="modul.php?isi=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>                                                
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    </nav>
<?php } ?>
<div id="page-wrapper">
    <?php 
    include 'data.php';
    include "isi.php";  ?>
</div>

<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>



    <!-- Bootstrap Core JavaScript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>

<!-- Morris Charts JavaScript -->
<script src="bower_components/raphael/raphael-min.js"></script>
<script src="bower_components/morrisjs/morris.min.js"></script>

    <!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>

    <!-- Date picker -->
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })  
</script> 
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
<script>
    Morris.Donut({
                element: 'pm-nel',
                data: [{
                    label: "Profit",
                    value: <?php echo hasil("select pm_nel from margin")*100; ?>
                }, {
                    label: "Biaya",
                    value: <?php echo (1-hasil("select pm_nel from margin"))*100; ?>
                }],
                formatter: function (x, data) { return x + '%'; },
                resize: true
    });
    Morris.Donut({
                element: 'pm-pk',
                data: [{
                    label: "Profit",
                    value: <?php echo hasil("select pm_pk from margin")*100; ?>
                }, {
                    label: "Biaya",
                    value: <?php echo (1-hasil("select pm_pk from margin"))*100; ?>
                }],
                formatter: function (x, data) { return x + '%'; },
                resize: true
    });
    Morris.Donut({
                element: 'pm-pd',
                data: [{
                    label: "Profit",
                    value: <?php echo hasil("select pm_pd from margin")*100; ?>
                }, {
                    label: "Biaya",
                    value: <?php echo (1-hasil("select pm_pd from margin"))*100; ?>
                }],
                formatter: function (x, data) { return x + '%'; },
                resize: true
    });
</script>

</body>

</html>
