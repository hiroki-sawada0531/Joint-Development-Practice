<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
     <link rel="stylesheet" href="{{asset('/css/home.css')}}">
</head>
<body>
     <div class="container">
          <div class="header">
               <h1 class="header_title">Title</h1>
               <div class="user">
                    <p>{{$user->name}}さん</p>
                    <a href="/logout">ログアウト</a>
               </div>
                    <div class="header_top">
                         <div class="search">
                              <a href="">条件検索</a>
                         </div>
                    </div>
                    <div class="header_bottom">
                         <nav>
                              <ul>
                                   <li>おすすめ</li>
                                   <li><a href="/profile/edit?id={{$user->id}}">マイページ</a>
                                   </li>
                              </ul>
                         </nav>
                    </div>
          </div>
          <div class="content">
               <div class="item">
                    <img src="{{asset('/image/girl.jpg')}}" alt="">
                    <p>Name:</p>
               </div>
               <div class="item">
                    <img src="{{asset('/image/girl.jpg')}}" alt="">
                    <p>Name:</p>
               </div>
               <div class="item">
                    <img src="{{asset('/image/girl.jpg')}}" alt="">
                    <p>Name:</p>
               </div>
               <div class="item">
                    <img src="{{asset('/image/girl.jpg')}}" alt="">
                    <p>Name:</p>
               </div>
          </div>
    </div>
</body>
</html>