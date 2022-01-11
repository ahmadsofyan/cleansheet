<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cleansheet </title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <center>
            &nbsp; <a href="" class="mr-3" style="color:#fff;"><span><font size="4.95" color="white" face="Helvetica Neue">DASHBOARD</font></span></a>
            </center>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              </div>
              <div class="profile_info">
                <h2>{{auth()->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  </li>
                  <li><a href="#"><i class="fa fa-desktop"></i> Data Karyawan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/DashboardAdmin">Tampil Data</a></li>
                      
                    </ul>
                  </li>
                  <li><a href="/Regis"><i class="fa fa-registered"></i> Registrasi <span class="form"></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" >
                  <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  {{auth()->user()->name}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out </a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main">
        <div class="wrapper">
        <div class="title-text">
            <div class="title signup">
               Menambah data
            </div>
         </div>
        <div class="form-container">
        <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
        <form action="{{route('savedata')}}"  class="signup"  method="post">
        {{ csrf_field() }}

          
            <select  class="field" name="user_id"  id="user_id" required>
              <option disable value>Name</option>
              @foreach($Jab as $item)
              <option  value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select>
          
          <div class="field">
            <input type="date" name="tanggal" placeholder="userid"  required>
          </div>
          
            <select class="field" name="jenis_pekerjaan">
              <option value="GeneralCleaning">General Cleaning</option>
              <option value="DeepCleaning">Deep Cleaning</option>
              <option value="Hydrovacum">Hydrovacum</option>
              <option value="CuciKasur">Cuci Kasur</option>
              <option value="CuciSofa">Cuci Sofa</option>
            </select>
            <div class="field">
            <input type="text" name="durasi" placeholder="durasi"  required>
          </div>
          <div class="field">
            <input type="number" name="pembayaran" id="bayar" onkeyup="sum();" placeholder="pembayaran"  >
          </div>
          <div class="field">
            <input type="number" name="makan" id="maem" onkeyup="sum();" placeholder="makan"  >
          </div>
          <div class="field">
            <input type="number" name="transport" id="trans" onkeyup="sum();" placeholder="transport">
          </div>
          <div class="field">
            <input type="number" name="total" id="hasil" onkeyup="sum();" placeholder="total"  readonly>
          </div>
            
            <select class="field" name="status">
              <option value="pending">Pending</option>
              <option value="Batal">Batal</option>
              <option value="Berhasil">Berhasil</option>
            </select>
            <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="simpan">
                  </div>


            </div>
        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright @ 2020 Dashboard : Khoirun Nurul Musthofa
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @include('sweetalert::alert')
  <script type="text/javascript">
    function sum(){
      var txtFirstNumberValue = document.getElementById('bayar').value;
      var txtSecondNumberValue = document.getElementById('maem').value;
      var txtThirdNumberValue = document.getElementById('trans').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue) + parseInt(txtThirdNumberValue);
      if (!isNaN(result)) {
        document.getElementById('hasil').value = result;
      }
    }
    </script>
    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>
   
  </body>
</html>
