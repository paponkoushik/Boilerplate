@extends('custom_errors.master')

@section('title', trans('default.404_page_not_found'))

@php

@endphp

@section('error-content')

    <app-error error-type="404"
               error-title="Page not found"
               error-description="{{ isset($message) ? $message : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry' }}"
               url="{{ url()->previous() ?? '/' }}"
    >
    </app-error>
@endsection
