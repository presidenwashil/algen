<!-- resources/views/assistants/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Assistant</h1>

    <form action="{{ route('assistants.update', $assistant) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" name="code" value="{{ $assistant->code }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $assistant->name }}" class="form-control" required>
        </div>
        <!-- Add fields for other attributes if needed -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
