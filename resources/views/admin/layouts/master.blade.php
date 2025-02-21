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
    <link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}">
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
    <script>
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset(auth()->user()->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        });

        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.querySelector('.dasboard_header_img img');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <style>
        .dasboard_header {
            margin-bottom: 20px;
            padding: 30px 0px;
            text-align: center;
        }
        /*.fa-camera {*/
        /*    color: #6777ef;*/
        /*}*/

        .dasboard_header .dasboard_header_img {
            border-radius: 50%;
            border: 5px solid var(--paraColor);
            box-shadow: var(--boxShadow);
            width: 140px;
            height: 140px;
            position: relative;
            margin: 0 auto;
        }

        .dasboard_header .dasboard_header_img img {
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
        }
        input,
        textarea {
            width: 100%;
            padding: 12px 20px;
            outline: none;
            resize: none;
            border: 1px solid #eee;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 300;
        }

        input::placeholder,
        textarea::placeholder {
            color: #a6a6ac;
        }

        button {
            border: none;
            box-shadow: none !important;
        }

        .dasboard_header .dasboard_header_img label {
            display: block;
            position: absolute;
            bottom: 0;
            right: 5px;
            font-size: 14px;
            width: 35px;
            height: 35px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            background: var(--colorWhite);
            box-shadow: var(--boxShadow);
            cursor: pointer;
            transition: all linear .3s;
            -webkit-transition: all linear .3s;
            -moz-transition: all linear .3s;
            -ms-transition: all linear .3s;
            -o-transition: all linear .3s;
        }

        .dasboard_header .dasboard_header_img label:hover {
            background: #F86F03;
            color: var(--colorWhite);
        }

    </style>
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
<script src="{{ asset('frontend/js/toastr.min.js')}}"></script>

<script>
    toastr.options.progressBar = true;

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error("{{ $error }}")
    @endforeach
    @endif

    @if($messages = session('messages'))
    @if(is_array($messages))
    @foreach ($messages as $message)
    toastr.success('{{ $message }}')
    @endforeach
    @else
    toastr.success('{{ $messages }}')
    @endif
    @endif
</script>

<!-- Template JS File -->
<script src="{{ asset('admin/assets/modules/scripts.js')}}"></script>
<script src="{{ asset('admin/assets/modules/custom.js')}}"></script>
<script src="{{ asset('admin/assets/modules/index-0.js')}}"></script>
</body>
</html>
