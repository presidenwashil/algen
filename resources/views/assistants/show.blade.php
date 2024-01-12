<!-- resources/views/assistants/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ $assistant->code }}</h1>
    <h1 class="mb-4">{{ $assistant->name }}</h1>
    <!-- Display other details if needed -->
    <a class="btn btn-warning" href="{{ route('assistants.edit', $assistant) }}">Edit</a>
    <form style="display: inline-block;" action="{{ route('assistants.destroy', $assistant) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
