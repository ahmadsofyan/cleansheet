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
                <h2> {{auth()->user()->name}}</h2>
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
                      <li><a href="/Tambahdata">Tambah Data</a></li>
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
               Form Registrasi
            </div>
         </div>
         <div class="form-container">
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="{{route('saveregis')}}" class="signup"  method="post">
               {{ csrf_field() }}
                  <div class="field">
                     <input type="text" name="name" placeholder="Masukan username" required>
                  </div>
                  <div class="field">
                     <input type="email" name="email" placeholder="Masukan Email" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Masukan password" required>
                  </div>
                  <div class="field">
                     <input type="number" name="norek" placeholder="No Rekening" required>
                  </div>
                  <select class="field" name="Bank">
                  <option disable value>BANK</option>
                     <option value="BCA">BCA</option>
                     <option value="MANDIRI">MANDIRI</option>
                     <option value="BRI">BRI</option>
                     <option value="BNI">BNI</option>
                     <option value="BSI">BSI</option>
                     <option value="DANAMON">DANAMON</option>
                     <option value="PERMATA">PERMATA</option>
                     <option value="MAYBANK">MAYBANK</option>
                     <option value="CIMB NIAGA">CIMB NIAGA</option>
                     <option value="MUAMALAT">MUAMALAT</option>
                     <option value="MEGA">MEGA</option>
                     <option value="BUKOPIN">OCBC NISP</option>
                     <option value="BTPN">BTPN</option>
                     <option value="BTN">BTN</option>
                   </select>
                   
                  <select class="field" name="role">
                     <option value="Admin">Admin</option>
                     <option value="Mitra">Mitra</option>
                   </select>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Daftar">
                  </div>
               </form>
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
    @include('sweetalert::alert')
  </body>
</html>
