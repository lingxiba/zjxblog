@extends('post.layout')
@section('content')
<table border="1">


@foreach($tasks as $task)
    <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->task_title}}</td>
        <td>{{$task->task_content}}</td>
        <td>
            <a href="post/edit/{{ $task->id }}">修改</a>
        </td>
        <td>
            <form action="{{ route('post.destroy', $task->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" value="删除" >
            </form>

        </td>
    </tr>
@endforeach

</table>
<div>
    <a href="{{route('post.create')}}">新增</a>
</div>
@endsection
