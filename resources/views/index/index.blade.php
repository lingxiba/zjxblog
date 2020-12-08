@extends('index.layout')
@section('content')
    <a href="{{route('task.create')}}">
        <input type="submit" value="新增数据" >
    </a>
    <a href="{{route('task.show')}}">
        <input type="submit" value="显示数据" >
    </a>
@endsection
