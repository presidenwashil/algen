<!-- resources/views/availability/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Assistant Availability</h1>

        <form action="{{ route('availability.update', $availability) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="assistant_id">Assistant:</label>
                <select name="assistant_id" class="form-control" required>
                    @foreach ($assistants as $assistant)
                        <option value="{{ $assistant->id }}"
                            {{ $assistant->id == $availability->assistant_id ? 'selected' : '' }}>{{ $assistant->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="day">Day:</label>
                <input type="text" name="day" value="{{ $availability->day }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="session">Session:</label>
                <input type="text" name="session" value="{{ $availability->session }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="is_available">Available:</label>
                <select name="is_available" class="form-control" required>
                    <option value="1" {{ $availability->is_available ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$availability->is_available ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
