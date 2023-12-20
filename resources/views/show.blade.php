@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="goback">
        <a href="{{route('tasks.index')}}"> <i class="fa-light fa-hand-back-point-left"></i> Back to Task List</a>
    </div>
    <div class="meta">
        <div>
            <strong>Created:</strong> {{$task->created_at}}<br />
            <strong>Last Updated:</strong> {{$task->updated_at}}
        </div>
        <div style="display: flex; align-items: flex-end; flex-direction: column">
            <a class="edit" href="{{route('tasks.edit', ['task' =>$task->id])}}">Edit<i class="fa-light fa-pencil"></i> </a>
            <form action="{{route('tasks.toggle-complete', ['task' => $task->id])}}" method="POST" style="margin-top: 10px;">
                @csrf
                @method('PUT')
                <button type="submit" class="icon">
                    @if($task->completed)
                        <i class="fa-solid fa-circle-xmark"></i>
                    @else
                        <i class="fa-solid fa-circle-check"></i>
                    @endif
                </button>
            </form>
        </div>
    </div>
    <h3>Description</h3>
    <p>{{$task->description}}</p>

    @if($task->long_description)
        <h3>Long Description</h3>
        {{$task->long_description}}
    @endif

    <div>
        <form method="POST" action="{{route('tasks.destroy', ['task' => $task->id])}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete">Delete</button>
        </form>
    </div>
@endsection

