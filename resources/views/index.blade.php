@extends('layouts.app')

@section('title')
    You have {{count($tasks)}} Tasks
@endsection


@section('content')
    <div class="mgmt">
        <a href="{{ route('tasks.create')}}">Create a Task</a>
    </div>
    <div>
        @forelse($tasks as $task)
            <div class="single-task">
                <a href="{{route('tasks.show', ['task' => $task->id])}}">
                    {{$task->title}}
                </a>
                <div class="status">
                    @if($task->completed)
                        <span class="green">Completed</span>
                    @else
                        <span class="red">In Progress</span>
                    @endif
                    <form action="{{route('tasks.toggle-complete', ['task' => $task->id])}}" method="POST">
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
        @empty
            <div>you have no tasks </div>
        @endforelse

        @if($tasks->count())
            <div class="pagination">
                {{$tasks->links()}}
            </div>
        @endif

    </div>
@endsection

