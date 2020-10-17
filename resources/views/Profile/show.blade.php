@extends('layouts.home')
@push('css')
<link rel="stylesheet" href="{{asset('/css/index.css')}}">
@endpush

@section('content')
<div class="content">
     <div class="engage">
          <div class="engage_name">
               <p>{{$user->name}}さん</p>
          </div>
          <img src="{{asset('storage/' . $images->file_name) }}">
          <div class="engage_content">
               <p class="lavel">年齢</p>
               <p class="answer">{{$form->age}}</p>
               <p class="lavel">最終学歴</p>
               <p class="answer">{{$form->finalEducation}}</p>
               <p class="lavel">年収</p>
               <p class="answer">{{$form->annualIncome}}</p>
               <p class="lavel">身長</p>
               <p class="answer">{{$form->height}}</p>
               <p class="lavel">体型</p>
               <p class="answer">{{$form->bodyType}}</p>
               <p class="lavel">出身</p>
               <p class="answer">{{$form->birthPlace}}</p>
               <p class="lavel">休日</p>
               <p class="answer">{{$form->holiday}}</p>
               <p class="lavel">血液型</p>
               <p class="answer">{{$form->bloodType}}</p>
               <p class="lavel">職業</p>
               <p class="answer">{{$form->profession}}</p>
          </div>
     </div>
     <div class="footer">
          <a class="btn back" href="/profile">スキップ</a>
          <a class="btn like" href="">いいね！</a>
     </div>
     @endsection