<!-- resources/views/assistants/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Assistant List</h1>
    <a class="btn btn-primary mb-3" href="{{ route('assistants.create') }}">Add Assistant</a>

    <table class="table">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assistants as $assistant)
                <tr>
                    <td>{{ $assistant->code }}</td>
                    <td>{{ $assistant->name }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('assistants.show', $assistant) }}">View</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('assistants.edit', $assistant) }}">Edit</a>
                        <form style="display: inline-block;" action="{{ route('assistants.destroy', $assistant) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
