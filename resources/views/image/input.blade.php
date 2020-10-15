@extends('layouts.app')

@section('content')
<!-- エラーメッセージ。なければ表示しない -->
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<!-- フォーム -->
<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="photo">画像ファイル:</label>
    <input type="file" class="form-control" name="file">
    <br>
    <input type="submit">
</form>
@endsection