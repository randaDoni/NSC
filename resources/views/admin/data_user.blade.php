<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Data User</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/cssadmin/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="styleadmin.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/cssadmin/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/cssadmin/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/cssadmin/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/cssadmin/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/cssadmin/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/jsadmin/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="assets/img/logos/tubes.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="assets/img/logos/tubes.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>NSC</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2 text-light">
                  <a href="/dsbadmin"><h4>General</h4></a>
                  <ul class="list-unstyled components">
                     <li class="active"><a href="/data_user"><i class="fa fa-briefcase blue1_color"></i> <span>Data User</span></a></li>
                     <li class="active"><a href="/post"><i class="fa fa-map purple_color2"></i> <span>Post</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                         </svg></i></button>

                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                  </svg></i><span class="badge">2</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <img class="img-responsive rounded-circle" style="width: 35px; height: 35px;" src="assets/img/logos/tubes.png" alt="#" /><span class="name_user">NSC</span>

                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Data User</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column3">

                     </div>
                     <div class="row column4 graph">
                        <div class="col-md-12">
                            <!-- tempat tabel user -->
                            <div class="container mt-3 my-1">
                                <div class="row">
                                  <div class="col-12">
                                  <div class="py-4">
                                    <h2>Tabel User</h2>
                                  </div>
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>email</th>
                                        <th>Option</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @forelse ($user as $users)
                                      <tr>
                                        <th>{{$loop->iteration}}</th>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->email}}</td>
                                        <td>
                                            <form action="{{route('user.delete',['users' =>$users->id])}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                      </tr>
                                      @empty
                                        <td colspan="6" class="text-center">Tidak ada data...</td>
                                      @endforelse
                                    </tbody>
                                  </table>
                                  </div>
                                </div>
                              </div>
                              <!-- end tabel user-->
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>All rights Reserved &copy; NSC, 2022</p>
                        <p class="fs--1 fw-light my-2 text-center text-md-end text-200"> Made with&nbsp;
                           <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                           <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                           </svg>&nbsp;by&nbsp;<a class="fw-bold text-primary" href="https://themewagon.com/" target="_blank">NSC</a>
                         </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jsadmin/jquery.min.js"></script>
      <script src="js/jsadmin/popper.min.js"></script>
      <script src="js/jsadmin/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/jsadmin/animate.js"></script>
      <!-- select country -->
      <script src="js/jsadmin/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/jsadmin/owl.carousel.js"></script>
      <!-- chart js -->
      <script src="js/jsadmin/Chart.min.js"></script>
      <script src="js/jsadmin/Chart.bundle.min.js"></script>
      <script src="js/jsadmin/utils.js"></script>
      <script src="js/jsadmin/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/jsadmin/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/jsadmin/chart_custom_style1.js"></script>
      <script src="js/jsadmin/custom.js"></script>
   </body>
</html>
