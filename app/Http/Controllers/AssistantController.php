<?php

namespace App\Http\Controllers;

use App\Models\Assistant;
use App\Models\AssistantAvailability;
use Illuminate\Http\Request;

class AssistantController extends Controller
{
    public function index()
    {
        $assistants = Assistant::all();
        return view('assistants.index', compact('assistants'));
    }

    public function create()
    {
        return view('assistants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            // Add validation rules for other fields if needed
        ]);

        Assistant::create($request->all());

        return redirect()->route('assistants.index')->with('success', 'Assistant created successfully!');
    }

    public function show(Assistant $assistant)
    {
        return view('assistants.show', compact('assistant'));
    }

    public function edit(Assistant $assistant)
    {
        return view('assistants.edit', compact('assistant'));
    }

    public function update(Request $request, Assistant $assistant)
    {
        $request->validate([
            'name' => 'required',
            // Add validation rules for other fields if needed
        ]);

        $assistant->update($request->all());

        return redirect()->route('assistants.index')->with('success', 'Assistant updated successfully!');
    }

    public function destroy(Assistant $assistant)
    {
        $assistant->delete();

        return redirect()->route('assistants.index')->with('success', 'Assistant deleted successfully!');
    }
}
