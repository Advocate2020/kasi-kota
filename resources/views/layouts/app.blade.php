<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{  asset('admin/assets/modules/fontawesome/css/all.min.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
