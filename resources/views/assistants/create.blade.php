<!-- resources/views/assistants/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Assistant</h1>

    <form action="{{ route('assistants.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" name="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <!-- Add fields for other attributes if needed -->
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
