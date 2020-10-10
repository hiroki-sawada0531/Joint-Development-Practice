@extends('layouts.header')
@push('css')
  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
@endpush

@section('content')
    <div class="main">
     <h1>自分のプロフィールを追加する</h1>
        <form action="/profile/add" method="post">
        @csrf
          <input class="form_input" type="hidden" id="name" name="userId" value="{{$user->id}}">
          <label for="name">名前</label>
          <input class="form_input" type="text" id="name" name="name">
          <label for="age">年齢</label>
          <input class="form_input" type="number" id="age" name="age">
          <label for="finalEducation">最終学歴</label>
          <input class="form_input" type="text" id="finalEducation" name="finalEducation">
          <label for="annualIncome">年収</label>
          <input class="form_input" type="number" id="annualIncome" name="annualIncome">
          <label for="height">身長</label>
          <input class="form_input" type="number" id="height" name="height">
          <label for="bodyType">体型</label>
          <input class="form_input" type="text" id="bodyType" name="bodyType">
          <label for="birthPlace">出身</label>
          <input class="form_input" type="text" id="birthPlace" name="birthPlace">
          <label for="holiday">休日</label>
          <input class="form_input" type="text" id="holiday" name="holiday">
          <label for="bloodType">血液型</label>
          <input class="form_input" type="text" id="bloodType" name="bloodType">
          <label for="profession">職業</label>
          <input class="form_input" type="text" id="profession" name="profession">
          <input type="submit" value="作成">
        </form>
    </div>
@endsection