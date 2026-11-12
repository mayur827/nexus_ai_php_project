<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    // Show Integration Table
    public function index()
    {
        $integrations = Integration::latest()->get();

        return view('admin.integration', compact('integrations'));
    }


    // Show Add Form
    public function create()
    {
        return view('admin.add_integration');
    }


    // Store Integration
    public function store(Request $request)
    {
        $request->validate([
            'tool_name' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:Active,Inactive',
        ]);

        Integration::create([
            'tool_name' => $request->tool_name,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.integration')
            ->with('success', 'Integration added successfully.');
    }


    // Show Edit Form
    public function edit($id)
    {
        $integration = Integration::findOrFail($id);

        return view('admin.edit_integration', compact('integration'));
    }


    // Update Integration
    public function update(Request $request, $id)
    {
        $request->validate([
            'tool_name' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:Active,Inactive',
        ]);

        $integration = Integration::findOrFail($id);

        $integration->update([
            'tool_name' => $request->tool_name,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.integration')
            ->with('success', 'Integration updated successfully.');
    }


    // Delete Integration
    public function destroy($id)
    {
        $integration = Integration::findOrFail($id);

        $integration->delete();

        return redirect()
            ->route('admin.integration')
            ->with('success', 'Integration deleted successfully.');
    }
}