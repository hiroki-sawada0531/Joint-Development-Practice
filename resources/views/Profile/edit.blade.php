@extends('layouts.header')

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/profile/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{$form->name}}"></td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="number" name="age" value="{{$form->age}}"></td>
        </tr>
        <tr>
            <th>finalEducation: </th>
            <td><input type="text" name="finalEducation" value="{{$form->finalEducation}}"></td>
        </tr>
        <tr>
            <th>annualIncome: </th>
            <td><input type="number" name="annualIncome" value="{{$form->annualIncome}}"></td>
        </tr>
        <tr>
            <th>height: </th>
            <td><input type="number" name="height" value="{{$form->height}}"></td>
        </tr>
        <tr>
            <th>bodyType: </th>
            <td><input type="text" name="bodyType" value="{{$form->bodyType}}"></td>
        </tr>
        <tr>
            <th>birthPlace: </th>
            <td><input type="text" name="birthPlace" value="{{$form->birthPlace}}"></td>
        </tr>
        <tr>
            <th>holiday: </th>
            <td><input type="text" name="holiday" value="{{$form->holiday}}"></td>
        </tr>
        <tr>
            <th>bloodType: </th>
            <td><input type="text" name="bloodType" value="{{$form->bloodType}}"></td>
        </tr>
        <tr>
            <th>profession: </th>
            <td><input type="text" name="profession" value="{{$form->profession}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 Profile.
@endsection