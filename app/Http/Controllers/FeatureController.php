<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    // Show Features
    public function index()
    {
        $features = Feature::latest()->get();

        return view('admin.feature', compact('features'));
    }


    // Show Add Feature Form
    public function create()
    {
        return view('admin.add_feature');
    }


    // Store Feature
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tag' => 'required|string|max:255',
        ]);

        Feature::create([
            'title' => $request->title,
            'description' => $request->description,
            'tag' => $request->tag,
        ]);

        return redirect()
            ->route('admin.feature')
            ->with('success', 'Feature added successfully.');
    }


    // Show Edit Feature Form
    public function edit($id)
    {
        $feature = Feature::findOrFail($id);

        return view('admin.edit_feature', compact('feature'));
    }


    // Update Feature
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'tag' => 'required|string|max:255',
        ]);

        $feature = Feature::findOrFail($id);

        $feature->update([
            'title' => $request->title,
            'description' => $request->description,
            'tag' => $request->tag,
        ]);

        return redirect()
            ->route('admin.feature')
            ->with('success', 'Feature updated successfully.');
    }


    // Delete Feature
    public function destroy($id)
    {
        $feature = Feature::findOrFail($id);

        $feature->delete();

        return redirect()
            ->route('admin.feature')
            ->with('success', 'Feature deleted successfully.');
    }
}
