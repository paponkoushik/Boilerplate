<!doctype html>
<html dir="{{ config('settings.application.layout') }}" lang="<?php  app()->getLocale(); ?>">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="shortcut icon" href="{{ config('settings.application.company_icon') }}" />
        <link rel="apple-touch-icon" href="{{ config('settings.application.company_icon') }}" />
        <link rel="apple-touch-icon-precomposed" href="{{ config('settings.application.company_icon') }}" />
        <title>@yield('title') - {{ config('app.name') }} </title>
        @include('auth-layouts.includes.header')
    </head>
    <body>
        <div class="root-preloader position-absolute overlay-loader-wrapper">
            <div class="spinner-bounce d-flex align-items-center justify-content-center h-100">
                <span class="bounce1 mr-1"></span>
                <span class="bounce2 mr-1"></span>
                <span class="bounce3 mr-1"></span>
                <span class="bounce4"></span>
            </div>
        </div>

        @yield('contents')

        <script>
            window.addEventListener('load', function() {
                document.querySelector('.root-preloader').remove();
            });
        </script>
    </body>
    @include('auth-layouts.includes.footer')
</html>


