<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    // Show Social table
    public function index()
    {
        $socials = Social::latest()->get();

        return view('admin.social', compact('socials'));
    }


    // Show Add Social form
    public function create()
    {
        return view('admin.add_social');
    }


    // Store Social
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'count' => 'required|string|max:255',
        ]);

        Social::create([
            'title' => $request->title,
            'count' => $request->count,
        ]);

        return redirect()
            ->route('admin.social')
            ->with('success', 'Social added successfully.');
    }


    // Show Edit Social form
    public function edit($id)
    {
        $social = Social::findOrFail($id);

        return view('admin.edit_social', compact('social'));
    }


    // Update Social
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'count' => 'required|integer',
        ]);

        $social = Social::findOrFail($id);

        $social->update([
            'title' => $request->title,
            'count' => $request->count,
        ]);

        return redirect()
            ->route('admin.social')
            ->with('success', 'Social updated successfully.');
    }


    // Delete Social
    public function destroy($id)
    {
        $social = Social::findOrFail($id);

        $social->delete();

        return redirect()
            ->route('admin.social')
            ->with('success', 'Social deleted successfully.');
    }
}