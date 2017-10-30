@extends('layouts.master')


@section('title')
    About
@endsection

{{--simply wanted to demonstrate using @push--}}
@push('head')
    <link href="/css/p3_about.css?a=x" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="content">
	    <h2>About</h2>
	    <p>What is this about</p>
    </div>
@endsection
