<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();

        return view('admin.testimonial', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.add_testimonial');
    }

    public function view($id)
{
    $testimonial = Testimonial::findOrFail($id);

    return view('admin.view_testimonial', compact('testimonial'));
}

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'client_name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

            $request->file('image')->move(
                public_path('uploads/testimonials'),
                $imageName
            );
        }

        Testimonial::create([
            'image' => $imageName,
            'client_name' => $request->client_name,
            'profession' => $request->profession,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.testimonial')
            ->with('success', 'Testimonial added successfully.');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.edit_testimonial', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'client_name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $testimonial = Testimonial::findOrFail($id);

        $imageName = $testimonial->image;

        if ($request->hasFile('image')) {

            if (
                $testimonial->image &&
                File::exists(public_path('uploads/testimonials/' . $testimonial->image))
            ) {
                File::delete(
                    public_path('uploads/testimonials/' . $testimonial->image)
                );
            }

            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

            $request->file('image')->move(
                public_path('uploads/testimonials'),
                $imageName
            );
        }

        $testimonial->update([
            'image' => $imageName,
            'client_name' => $request->client_name,
            'profession' => $request->profession,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.testimonial')
            ->with('success', 'Testimonial updated successfully.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        if (
            $testimonial->image &&
            File::exists(public_path('uploads/testimonials/' . $testimonial->image))
        ) {
            File::delete(
                public_path('uploads/testimonials/' . $testimonial->image)
            );
        }

        $testimonial->delete();

        return redirect()
            ->route('admin.testimonial')
            ->with('success', 'Testimonial deleted successfully.');
    }
}