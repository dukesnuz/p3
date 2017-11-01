{{-- views/book/menu/welcome.blade.php --}}
@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <h3>Dinner is Served</h3>
    <p class='outputDisplay'>
        Welcome to {{ config('app.name') }}. Search our menu to 
        find your favorite dish for dinner.
    </p>

    <div class='socialMedia'>
        <h3>Simply Wanted to Practice Using a Package.</h3>
        @twitter('HarvardEXT/status/923182868691595265')
    </div>
@endsection
