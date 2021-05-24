@extends('layouts.app')

@section('title', trans('default.app_settings'))

@section('contents')
    <app-setting :permissions="{{ json_encode($permissions) }}"></app-setting>
@endsection

