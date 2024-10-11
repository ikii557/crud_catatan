<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head')


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div id="main-wrapper">


    <!-- navbar -->
     @include('layouts.navbar')
     <!-- endnavbar -->


     <!-- sidebar -->
      @include('layouts.sidebar')
      <!-- endsidebar -->


      <!-- content -->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    <!-- endcontent -->
       <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>copyright © Designed &amp; Developed by <a href="#" target="_blank">Web Catatan</a> 2024</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    @include('layouts.footer')

    </body>

</html>
