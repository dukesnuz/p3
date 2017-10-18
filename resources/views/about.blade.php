@extends('layouts.master')

@section('title')
About
@endsection

{{--simply wanted to demonstrate using @push--}}
@push('head')
<link href="./css/p3_about.css" rel="stylesheet" type="text/css">
@endpush

@section('content')
<div class="content">
	<h1>About</h1>
	<p>What is this about</p>
</div>
@endsection
