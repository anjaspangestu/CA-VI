@php
  $uriSegment = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  // dd($uriSegment);

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>@yield('title')</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
      <!-- Bootstrap core CSS-->
      <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="{{ asset('css/osahan.css') }}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.theme.css') }}">

      <link rel="stylesheet" href="{{ asset('dataTables/css/jquery.dataTables.min.css') }}">
      <link rel="stylesheet" href="{{ asset('dataTables/css/dataTables.min.css') }}">
      <link rel="stylesheet" href="{{ asset('asset/css/slim.min.css') }}">
      <link rel="stylesheet" href="{{ asset('asset/css/sweetalert2.min.css') }}">
      <link rel="stylesheet" href="{{ asset('asset/css/sl-mp.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/master.css')}}">
      @yield('css')
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp;
         {{-- <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button>  --}}
         &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="" >CAVI</a>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               {{-- <input type="text" class="form-control" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i>
                  </button>
               </div> --}}
            </div>
         </form>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
           @guest

           @endguest
           @auth
             @if (Auth::user()->role_id == 1)
             @elseif (Auth::user()->role_id == 2)
               <li class="nav-item mx-1">
                  <a class="nav-link" href="/upload-video">
                  <i class="fas fa-plus-circle fa-fw"></i>
                  Upload Video
                  </a>
               </li>
             @endif
           @endauth



            <li class="nav-item dropdown no-arrow mx-1">
                @guest

                @endguest
                @auth
                  @if (Auth::user()->role_id == 1)
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
                    </div>
                  @elseif (Auth::user()->role_id ==2)
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
                    </div>
                  @endif
                @endauth
            </li>

            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
              @if (Route::has('login'))

                @auth
                  <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::user()->photo_path == "")
                        <i class="fas fa-fw fa-user-circle"></i>
                     @else
                        <img alt="Avatar" src="{{ asset('img/'.Auth::user()->photo_path)}}">
                    @endif

                  {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                     <a class="dropdown-item" href="/profile"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
                  </div>
                @else
              <li>
                <a class="nav-link " href="{{ route('login') }}">Login</a>
                @endauth
              @endif
            </li>
         </ul>
      </nav>
      <div class="container sl-mt20">
        <div class="row">
          @guest
            <div class="col-md-2 offset-md-1">
              <div class="wrapper-img">
                <a href="/kategori/film"><i class="fa fa-film fa-5x"></i></a>
              </div><br>
              <span>&emsp;&nbsp;<b>FILM</b></span>
            </div>
            <div class="col-md-2">
              <div class="wrapper-img">
                <a href="#"><i class="fa fa-life-ring fa-5x" aria-hidden="true"></i></a>
              </div><br>
              <span><b>OLAHRAGA</b></span>
            </div>
            <div class="col-md-2">
              <div class="wrapper-img">
                <a href="#"><i class="fa fa-music fa-5x"></i></a>
              </div><br>
              <span>&emsp;&nbsp;<b>MUSIK</b></span>
            </div>
            <div class="col-md-2">
              <div class="wrapper-img">
                <a href="#"><i class="fa fa-gamepad fa-5x"></i></a>
              </div><br>
              <span>&emsp;&nbsp;<b>GAME</b></span>
            </div>
            <div class="col-md-2">
              <div class="wrapper-img">
                &emsp;<a href="#"><i class="fa fa-book fa-5x"></i></a>
              </div><br>
              <span><b>PEMBELAJARAN</b></span>
            </div>
            @else
              @if (Auth::user()->role_id == 2)
                <div class="col-md-2 offset-md-1">
                  <div class="wrapper-img">
                    <a href="#"><i class="fa fa-film fa-5x"></i></a>
                  </div><br>
                  <span>&emsp;&nbsp;<b>FILM</b></span>
                </div>
                <div class="col-md-2">
                  <div class="wrapper-img">
                    <a href="#"><i class="fa fa-life-ring fa-5x" aria-hidden="true"></i></a>
                  </div><br>
                  <span><b>OLAHRAGA</b></span>
                </div>
                <div class="col-md-2">
                  <div class="wrapper-img">
                    <a href="#"><i class="fa fa-music fa-5x"></i></a>
                  </div><br>
                  <span>&emsp;&nbsp;<b>MUSIK</b></span>
                </div>
                <div class="col-md-2">
                  <div class="wrapper-img">
                    <a href="#"><i class="fa fa-gamepad fa-5x"></i></a>
                  </div><br>
                  <span>&emsp;&nbsp;<b>GAME</b></span>
                </div>
                <div class="col-md-2">
                  <div class="wrapper-img">
                    &emsp;<a href="#"><i class="fa fa-book fa-5x"></i></a>
                  </div><br>
                  <span><b>PEMBELAJARAN</b></span>
                </div>
              @elseif (Auth::user()->role_id == 1)
              @endif
          @endguest
        </div>
      </div>
      <div id="wrapper">

         <!-- Sidebar -->
         <ul class="navbar-nav">
         
           <li class="nav-item active">
             <h6>Sub Kategori</h6>
             <hr>
           </li>
           <hr>
           <li class="nav-item">
             <a class="nav-link" href="/">
               <h6>Horror</h6>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/">
               <h6>Komedi</h6>
             </a>
           </li>
         </ul>
         <div id="content-wrapper">
            @yield('content')
         </div>
         <!-- /.content-wrapper -->
      </div>

      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- Core plugin JavaScript-->
      <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
      <!-- Owl Carousel -->
      <script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
      {{-- library --}}
      <script type="text/javascript" src="{{ asset('dataTables/js/jquery.dataTables.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('asset/js/slim.global.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('asset/js/slim.jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('asset/js/slim.kickstart.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('asset/js/sweetalert2.min.js') }}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{ asset('js/custom.js') }}"></script>
      @yield('js')

   </body>

</html>
