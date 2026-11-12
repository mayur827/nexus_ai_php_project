<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    // Show Work Section
    public function index()
    {
        $works = Work::latest()->get();

        return view('admin.work', compact('works'));
    }


    // Show Add Work Form
    public function create()
    {
        return view('admin.add_work');
    }


    // Store Work
    public function store(Request $request)
    {
        $request->validate([
            'step' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Work::create([
            'step' => $request->step,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.work')
            ->with('success', 'Work section added successfully.');
    }


    // Show Edit Work Form
    public function edit($id)
    {
        $work = Work::findOrFail($id);

        return view('admin.edit_work', compact('work'));
    }


    // Update Work
    public function update(Request $request, $id)
    {
        $request->validate([
            'step' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $work = Work::findOrFail($id);

        $work->update([
            'step' => $request->step,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.work')
            ->with('success', 'Work section updated successfully.');
    }


    // Delete Work
    public function destroy($id)
    {
        $work = Work::findOrFail($id);

        $work->delete();

        return redirect()
            ->route('admin.work')
            ->with('success', 'Work section deleted successfully.');
    }
}