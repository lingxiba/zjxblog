@extends('post.layout')
@section('content')
<form action="{{route('post.store')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="task-title" id="task-id" placeholder="文章标题">
    <textarea name="task-content" id="task-content" placeholder="文章内容" cols="30" rows="10"></textarea>
    <input type="submit" value="提交">
</form>
<a href="{{route('post.index')}}">返回</a>

@endsection
