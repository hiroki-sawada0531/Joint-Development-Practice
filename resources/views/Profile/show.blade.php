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
                    <p>年齢</p>
                    <p>{{$form->age}}</p>
                    <p>最終学歴</p>
                    <p>{{$form->finalEducation}}</p>
                    <p>年収</p>
                    <p>{{$form->annualIncome}}</p>        
                    <p>身長</p>
                    <p>{{$form->height}}</p>         
                    <p>体型</p>
                    <p>{{$form->bodyType}}</p>     
                    <p>出身</p>
                    <p>{{$form->birthPlace}}</p>
                    <p>休日</p>
                    <p>{{$form->holiday}}</p>         
                    <p>血液型</p>
                    <p>{{$form->bloodType}}</p>
                    <p>職業</p>
                    <p>{{$form->profession}}</p>
               </div>
          </div>          
     <div class="footer">
          <a href="/profile">スキップ</a>
          <a href="">いいね！</a>
     </div>
@endsection