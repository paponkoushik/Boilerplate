@extends('custom_errors.master')

@section('title', trans('default.500_internal_server_error'))

@php

@endphp

@section('error-content')

    <app-error error-type="500"
               error-title="Internal server error"
               error-description="{{ isset($message) ? $message : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry' }}"
               url="{{ url()->previous() ?? '/' }}"
    >
    </app-error>
@endsection
