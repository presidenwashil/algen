<!-- resources/views/availability/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Assistant Availability</h1>
        <p><strong>Assistant:</strong> {{ $availability->assistant->name }}</p>
        <p><strong>Day:</strong> {{ $availability->day }}</p>
        <p><strong>Session:</strong> {{ $availability->session }}</p>
        <p><strong>Available:</strong> {{ $availability->is_available ? 'Yes' : 'No' }}</p>

        <a class="btn btn-warning" href="{{ route('availability.edit', $availability) }}">Edit</a>
        <form style="display: inline-block;" action="{{ route('availability.destroy', $availability) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
