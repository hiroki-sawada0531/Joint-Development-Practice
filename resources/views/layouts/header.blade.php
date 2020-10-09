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
  <link rel="stylesheet" href="{{asset('/css/header.css')}}">
  @stack('css')
</head>
<body>
     <div class="container">
          <div class="header">
               <div class="header_left">
                    <p>Title</p>
               </div>
               <div class="header_right">
                    <nav>
                         <ul class="header_ul">
                         <li><a class="header_link" href="#">使用方法</a></li>
                         <li><a class="header_link" href="#">お問い合わせ</a></li>
                         <li><a class="header_link" href="/login">ログイン</a></li>
                         </ul>
                    </nav>
               </div>
          </div>
          @yield('content')
     </div>
  <script src="{{asset('/js/auth.js')}}"></script>
</body>
</html>