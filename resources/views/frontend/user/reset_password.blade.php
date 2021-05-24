@extends('auth-layouts.auth')

@section('title', trans('default.reset_pass'))

@section('contents')
    <div id="app">
        <reset-password
                user="{{ $user ?? '' }}"
                token="{{ $token ?? '' }}"
                site-key="{{ $site_key }}"
                recaptcha-enable="{{ $recaptcha_enable }}"
                :config-data="{{ json_encode(config('settings.application')) }}">
        </reset-password>
    </div>
@endsection

