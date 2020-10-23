@extends('layouts.home')
@push('css')
<link rel="stylesheet" href="{{asset('/css/add.css')}}">
@endpush

@section('content')
<div class="main">
  <div class="form_title">検索条件の設定</div>
  <form action="/profile/search" method="post" enctype="multipart/form-data">
    @csrf

    <div class="select_form">
      <p>年齢</p>
      <select class="form_input" name="age">
        <option class="input_gray">未設定</option>
        @for($i=18; $i <= 100; $i++) <option>{{$i}}歳</option>
          @endfor
          <option>100歳以上</option>
      </select>
    </div>

    <div class="select_form">
      <p>性別</p>
      <select class="form_input" name="age">
        <option class="input_gray">未設定</option>
        <option class="input_gray">未設定</option>
        <option>男</option>
        <option>女</option>
      </select>
    </div>

    <div class="select_form">
      <p>最終学歴</p>
      <select class="form_input" name="finalEducation">
        <option>未設定</option>
        <option>中学卒</option>
        <option>高校卒</option>
        <option>大学卒</option>
        <option>大学院卒</option>
      </select>
    </div>

    <div class="select_form">
      <p>年収</p>
      <select class="form_input" name="annualIncome">
        <option>未設定</option>
        <option>200万未満</option>
        <option>200万円以上~400万円未満</option>
        <option>400万円以上~600万円未満</option>
        <option>600万円以上~800万円未満</option>
        <option>800万円以上</option>
      </select>
    </div>

    <div class="select_form">
      <p>身長</p>
      <select class="form_input" name="height">
        <option>未設定</option>
        <option>130cm未満</option>
        @for($i=130; $i <= 199; $i++) <option>{{$i}}cm</option>
          @endfor
          <option>200cm以上</option>
      </select>
    </div>

    <div class="select_form">
      <p>体型</p>
      <select class="form_input" name="bodyType">
        <option>未設定</option>
        <option>スリム</option>
        <option>ややスリム</option>
        <option>普通</option>
        <option>筋肉質</option>
        <option>ぽっちゃり</option>
        <option>太め</option>
      </select>
    </div>

    <div class="select_form">
      <p class="required">出身</p>
      <select class="form_input" name="birthPlace">
        <option value="">選択してください</option>
        <option>北海道</option>
        <option>青森県</option>
        <option>岩手県</option>
        <option>宮城県</option>
        <option>秋田県</option>
        <option>山形県</option>
        <option>福島県</option>
        <option>茨城県</option>
        <option>栃木県</option>
        <option>群馬県</option>
        <option>埼玉県</option>
        <option>千葉県</option>
        <option>東京都</option>
        <option">神奈川県</option>
          <option>新潟県</option>
          <option>富山県</option>
          <option>石川県</option>
          <option>福井県</option>
          <option>山梨県</option>
          <option>長野県</option>
          <option>岐阜県</option>
          <option>静岡県</option>
          <option>愛知県</option>
          <option>三重県</option>
          <option>滋賀県</option>
          <option>京都府</option>
          <option>大阪府</option>
          <option>兵庫県</option>
          <option>奈良県</option>
          <option>和歌山県</option>
          <option>鳥取県</option>
          <option>島根県</option>
          <option>岡山県</option>
          <option>広島県</option>
          <option>山口県</option>
          <option>徳島県</option>
          <option>香川県</option>
          <option>愛媛県</option>
          <option>高知県</option>
          <option>福岡県</option>
          <option>佐賀県</option>
          <option>長崎県</option>
          <option>熊本県</option>
          <option>大分県</option>
          <option>宮崎県</option>
          <option>鹿児島県</option>
          <option>沖縄県</option>
      </select>
    </div>

    <div class="select_form">
      <p>休日</p>
      <select class="form_input" name="holiday">
        <option>未設定</option>
        <option>土日</option>
        <option>平日</option>
        <option>不定期</option>
        <option>その他</option>
      </select>
    </div>

    <div class="select_form">
      <p>血液型</p>
      <select class="form_input" name="bloodType">
        <option>未設定</option>
        <option>A</option>
        <option>B</option>
        <option>AB</option>
        <option>O</option>
      </select>
    </div>

    <div class="select_form">
      <p class="required">職業</p>
      <select class="form_input" name="profession">
        <option>選択してください</option>
        <option>公務員</option>
        <option>経営者・役員</option>
        <option>会社員</option>
        <option>自営業</option>
        <option>自由業</option>
        <option>専業主婦</option>
        <option>パート・アルバイト</option>
        <optio>学生</option>
          <option>その他</option>
      </select>
    </div>
    <input class="submit" type="submit" value="検索">
  </form>
</div>
@endsection
