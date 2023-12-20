@extends('layouts.app')

@section('title', 'Edit a Task')

@section('content')
    @include('form', ['task' => $task]);
@endsection

