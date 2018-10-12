@extends('layout.master')
@section('content')
    <div class="title m-b-md">
        Task Management
    </div>
    <a href="{{ route('task_add') }}">
        <button type="button" class="btn btn-outline-primary">Add New Task</button>
    </a>
    <a href="{{route('task_list')}}">
        <button type="button" class="btn btn-outline-primary">Task List</button>
    </a>
    <hr>
@endsection