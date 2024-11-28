@extends('sitesettings/basicsetting::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('sitesettings/basicsetting.name') !!}</p>
@endsection
