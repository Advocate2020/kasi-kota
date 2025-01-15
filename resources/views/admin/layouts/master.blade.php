<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{  asset('admin/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/modules/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/modules/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Developed By <a href="https://websolutionus.com">Websolutionus</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>



<!-- General JS Scripts -->
<script src="{{ asset('admin/assets/modules/jquery.min.js')}}"></script>
<script src="{{ asset('admin/assets/modules/popper.js')}}"></script>
<script src="{{ asset('admin/assets/modules/tooltip.js')}}"></script>
<script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/assets/modules/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('admin/assets/modules/stisla.js')}}"></script>
<script src="{{ asset('admin/assets/modules/moment.min.js')}}"></script>



<!-- Template JS File -->
<script src="{{ asset('admin/assets/modules/scripts.js')}}"></script>
<script src="{{ asset('admin/assets/modules/custom.js')}}"></script>
<script src="{{ asset('admin/assets/modules/index-0.js')}}"></script>
</body>
</html>
