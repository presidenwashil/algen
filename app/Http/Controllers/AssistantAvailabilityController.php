<?php

namespace App\Http\Controllers;

use App\Models\Assistant;
use App\Models\AssistantAvailability;
use Illuminate\Http\Request;

class AssistantAvailabilityController extends Controller
{
    public function index()
    {
        $availabilities = AssistantAvailability::all();
        return view('availability.index', compact('availabilities'));
    }

    public function create()
    {
        $assistants = Assistant::all();  // Add this line to fetch all assistants
        return view('availability.create', compact('assistants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'assistant_id' => 'required|exists:assistants,id',
            'day' => 'required',
            'session' => 'required',
            'is_available' => 'required|boolean',
        ]);

        AssistantAvailability::create($request->all());

        return redirect()->route('availability.index')->with('success', 'Availability created successfully!');
    }

    public function show(AssistantAvailability $availability)
    {
        return view('availability.show', compact('availability'));
    }

    public function edit(AssistantAvailability $availability)
    {
        return view('availability.edit', compact('availability'));
    }

    public function update(Request $request, AssistantAvailability $availability)
    {
        $request->validate([
            'assistant_id' => 'required|exists:assistants,id',
            'day' => 'required',
            'session' => 'required',
            'is_available' => 'required|boolean',
        ]);

        $availability->update($request->all());

        return redirect()->route('availability.index')->with('success', 'Availability updated successfully!');
    }

    public function destroy(AssistantAvailability $availability)
    {
        $availability->delete();

        return redirect()->route('availability.index')->with('success', 'Availability deleted successfully!');
    }
}
