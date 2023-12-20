@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Create a new Task')

@section('content')
    <div>
        <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
            @csrf
            @isset($task)
                @method('PUT')
            @endisset
            <div>
                <label for="title">
                    Title
                </label>
                <input type="text" id="title" name="title" value="{{ $task->title ?? old('title') }}"/>
                @error('title')
                <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="description">
                    Description
                </label>
                <textarea id="description" name="description" rows="4">{{ $task->description ?? old('description') }}</textarea>
                @error('description')
                <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="long_description">
                    Long Description
                </label>
                <textarea id="long_description" name="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
                @error('long_description')
                <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="">
                    @isset($task)
                        Update Task
                    @else
                        Add Task
                    @endisset
                </button>
            </div>
        </form>
    </div>
@endsection

