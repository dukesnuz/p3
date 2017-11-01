@extends('layouts.master')


@section('title')
    About
@endsection

{{-- simply wanted to demonstrate using @push --}}
@push('head')
    <link href="/css/p3_about.css?t=<?php echo rand(); ?>" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="content">
        <h2>About</h2>
        <p>This app is my Project 3. It is a simple app that finds food dishes according to
            the search criteria.
        </p>
    </div>
@endsection
