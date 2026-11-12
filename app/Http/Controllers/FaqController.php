<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();

        return view('admin.faq', compact('faqs'));
    }

    public function create()
    {
        return view('admin.add_faq');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()
            ->route('admin.faq')
            ->with('success', 'FAQ added successfully.');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('admin.edit_faq', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()
            ->route('admin.faq')
            ->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);

        $faq->delete();

        return redirect()
            ->route('admin.faq')
            ->with('success', 'FAQ deleted successfully.');
    }
}