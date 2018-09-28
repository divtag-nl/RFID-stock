@extends('layouts.master')

@section('content')
    <header class="app-bar">
        <span class="app-bar__title">Tag Ventures</span>
    </header>
    <main class="main">
        <router-view></router-view>
    </main>
@endsection
