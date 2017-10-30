{{-- views/book/menu/welcome.blade.php --}}
@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <h3>Dinner is Served</h3>
    <p class='outputDisplay'>Welcome to What's for Dinner. Search our menu to find your favorite dish for dinner</p>
@endsection

@section('socialMedia')
    <div class='socialMedia'>
        <h3>Simply Wanted to Pratice Using a Package.</h3>
        @embed('https://twitter.com/harvardext')
    </div>
@endsection
