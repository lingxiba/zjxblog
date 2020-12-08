@extends('index.layout')
@section('content')
<table border="1">


@foreach($tasks as $task)
    <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->task_title}}</td>
        <td>{{$task->task_content}}</td>
    </tr>
@endforeach

</table>
@endsection
