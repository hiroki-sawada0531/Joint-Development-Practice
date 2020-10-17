@extends('layouts.home')
@push('css')
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
@endpush

@section('content')
     <div class="header_bottom">
          <nav>
               <ul>
                    <li><a href="">条件検索</a></li>
                    <li><a href="/profile/edit?id={{$user->id}}">マイページ</a></li>
               </ul>
          </nav>
     </div>

     <div class="content">
          @foreach($images as $image)
               <div class="item">
                    <a href="/profile/show?id={{$image->user_id}}"><img src="{{asset('storage/' . $image->file_name) }}"></a>
                    <p>{{$profile->find($image->user_id)->name}}</p>
               </div>
          @endforeach
     </div>
@endsection
