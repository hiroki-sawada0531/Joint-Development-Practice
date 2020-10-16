@extends('layouts.header')
@push('css')
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
@endpush

@section('content')
    <div class="main">
        <div class="main_container">
            <h2 class="sub_copy">SNSで見つける新しい出会い</h2>
            <h1 class="main_copy">SoulMate</h1>
            <a href="/login" class="sign in">ログイン</a>
            <a href="/register" class="sign up">今すぐ始める</a>
        </div>
    </div>
@endsection