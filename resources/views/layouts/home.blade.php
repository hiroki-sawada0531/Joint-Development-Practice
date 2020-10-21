<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/home.css')}}">
  @stack('css')
</head>
<body>
     <div class="container">
          <div class="header">
               <div class="user_name">
                    <p>{{$user->name}}さん</p>
               </div>
               <div class="header_logo">
                    <a href="/profile"><img src="{{asset('/image/SoulMate.png')}}" alt="SoulMate"></a>
               </div>
               <div class="header_body">
                    <a href="/logout">ログアウト</a>
               </div>
          </div>
          @yield('content')
     </div>
</body>
</html>