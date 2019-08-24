@extends('layouts.app')

@section('content')
<h1>Task list</h1>
<ul>
  @foreach ($tasks as $task)
    <li><a href="/tasks/{{ $task->id }}">{{ $task->name }}</a></li>
  @endforeach
</ul>
@endsection
