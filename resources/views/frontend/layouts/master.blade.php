<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>{{ Config('app.name') }} || Restaurant Template</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.exzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>

@include('frontend.layouts.menu')


@yield('content')

<!--=============================
    FOOTER START
==============================-->
@include('frontend.layouts.footer')
<!--=============================
    FOOTER END
==============================-->


<!--=============================
    SCROLL BUTTON START
==============================-->
<div class="fp__scroll_btn">
    go to top
</div>
<!--=============================
    SCROLL BUTTON END
==============================-->


<!--jquery library js-->
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
<!--bootstrap js-->
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<!--font-awesome js-->
<script src="{{ asset('frontend/js/Font-Awesome.js')}}"></script>
<!-- slick slider -->
<script src="{{ asset('frontend/js/slick.min.js')}}"></script>
<!-- isotop js -->
<script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<!-- simplyCountdownjs -->
<script src="{{ asset('frontend/js/simplyCountdown.js')}}"></script>
<!-- counter up js -->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.countup.min.js')}}"></script>
<!-- nice select js -->
<script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
<!-- venobox js -->
<script src="{{ asset('frontend/js/venobox.min.js')}}"></script>
<!-- sticky sidebar js -->
<script src="{{ asset('frontend/js/sticky_sidebar.js')}}"></script>
<!-- wow js -->
<script src="{{ asset('frontend/js/wow.min.js')}}"></script>
<!-- ex zoom js -->
<script src="{{ asset('frontend/js/jquery.exzoom.js')}}"></script>
<!-- ex zoom js -->
<script src="{{ asset('frontend/js/toastr.min.js')}}"></script>
<!--main/custom js-->
<script src="{{ asset('frontend/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        preferredCountries: ["za"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });


</script>

<!-- show dynamic validation message-->
<!-- show dynamic validation message-->
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

    // Set csrf at ajax header
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){
        $('.button-click').click();
    })
</script>
</body>

</html>
