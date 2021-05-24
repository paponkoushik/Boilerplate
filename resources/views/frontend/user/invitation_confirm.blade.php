@extends('auth-layouts.auth')

@section('title', trans('default.user_registration'))

@section('contents')
    <div id="app">
        <registration user-info='{{$user ?? ''}}' site-key='{{$site_key}}' recaptcha-enable = '{{$recaptcha_enable}}' :config-data="{{ json_encode(config('settings.application'))}}"></registration>
    </div>
@endsection
