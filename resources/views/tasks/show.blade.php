@extends('layouts.app')
@section('content')
<h1> {{ $task->name }} </h1>
<div class="task_info">
  Creation date - {{ $task->created_at }}
</div>
<div class="link_wrapper mt-3">
  <a href="/tasks/">Back</a>
</div>
@endsection