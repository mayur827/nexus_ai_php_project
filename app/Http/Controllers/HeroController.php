<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    // Show Hero table
    public function index()
    {
        $heroes = Hero::latest()->get();

        return view('admin.hero', compact('heroes'));
    }


    // Show Add Hero form
    public function create()
    {
        return view('admin.add_hero');
    }


    // Store Hero
    public function store(Request $request)
    {
        $request->validate([
            'badge' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',

            'primary_button_text' => 'required|string|max:255',
            'primary_button_link' => 'required|string|max:255',

            'secondary_button_text' => 'nullable|string|max:255',
            'secondary_button_link' => 'nullable|string|max:255',
        ]);

        Hero::create($request->all());

        return redirect()
            ->route('admin.hero')
            ->with('success', 'Hero added successfully.');
    }


    // Show Edit Hero form
    public function edit($id)
    {
        $hero = Hero::findOrFail($id);

        return view('admin.edit_hero', compact('hero'));
    }


    // Update Hero
    public function update(Request $request, $id)
    {
        $request->validate([
            'badge' => 'required|string|max:255',
            'title' => 'required|string',
            'description' => 'required|string',

            'primary_button_text' => 'required|string|max:255',
            'primary_button_link' => 'required|string|max:255',

            'secondary_button_text' => 'nullable|string|max:255',
            'secondary_button_link' => 'nullable|string|max:255',
        ]);

        $hero = Hero::findOrFail($id);

        $hero->update($request->all());

        return redirect()
            ->route('admin.hero')
            ->with('success', 'Hero updated successfully.');
    }


    // Delete Hero
    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);

        $hero->delete();

        return redirect()
            ->route('admin.hero')
            ->with('success', 'Hero deleted successfully.');
    }
}
