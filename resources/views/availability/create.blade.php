<!-- resources/views/availability/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Assistant Availability</h1>

    <form action="{{ route('availability.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="assistant_id">Assistant:</label>
            <select name="assistant_id" class="form-control" required>
                @foreach ($assistants as $assistant)
                    <option value="{{ $assistant->id }}">{{ $assistant->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="day">Day:</label>
            <input type="text" name="day" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="session">Session:</label>
            <input type="text" name="session" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="is_available">Available:</label>
            <select name="is_available" class="form-control" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
