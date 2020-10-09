@extends('layouts.header')
@push('css')
  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
@endpush

@section('content')
    <div class="main">
        <div class="main_container">
            <h2 class="sub_copy">キャッチコピー1</h2>
            <h1 class="main_copy">キャッチコピー２</h1>
            <a href="/register" class="sign in">ログイン</a>
            <a href="/login" class="sign up">今すぐ始める</a>
            <a href="profile/add">仮add</a>
        </div>
    </div>
@endsection
    