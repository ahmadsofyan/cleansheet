<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mitra</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assetmitra/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assetmitra/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href=assetmitra/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assetmitra/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assetmitra/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assetmitra/img/sidebar-111.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                {{auth()->user()->name}}
                </a>
                <a href="#" class="simple-text">
                {{auth()->user()->norek}}
                {{auth()->user()->Bank}}
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="/printslip" target="_blank">
                        <i class="fa fa-print"></i>
                        <p>Print</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}">
                        <i class="pe-7s-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mitra CleanSheet</a>
                   
                </div>
                <div class="collapse navbar-collapse">
                </div>
            </div>
        </nav>
 <!--   Mainbody   -->

 <table class="table table-striped">
 <tr>
                
                <td>Nama</td>
                <td>Tanggal</td>
                <td>Jenis Pekerjaan</td>
                <td>Pembayaran</td>
                <td>Makan</td>
                <td>Transport</td>
                <td>parkir</td>
                <td>Total</td>
                <td>Status</td>
                
            </tr>
            @foreach($mitra as $view)
            @if ($view->user->id == Auth::user()->id) 
            <tr>
            <td>{{$view->user->name}}</td>
            <td>{{date('d-m-y',strtotime($view->tanggal))}}</td>
            <td>{{$view->jenis_pekerjaan}}</td>
            <td>Rp {{$view->pembayaran}}</td>
            <td>Rp {{$view->makan}}</td>
            <td>Rp {{$view->transport}}</td>
            <td>Rp {{$view->parkir}}</td>
            <td>Rp {{$view->total}}</td>
            <td>{{$view->status}}</td>      
            </tr>
            @endif
            @endforeach
</table>

    </div>
</div>

</body>
    <!--   Core JS Files   -->
    <script src="assetmitra/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assetmitra/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assetmitra/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assetmitra/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assetmitra/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assetmitra/js/demo.js"></script>
</html>
