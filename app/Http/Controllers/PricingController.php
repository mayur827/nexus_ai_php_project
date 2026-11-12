<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::latest()->get();

        return view('admin.price', compact('pricings'));
    }

    public function create()
    {
        return view('admin.add_price');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'description' => 'required|string',
            'features' => 'required|string',
        ]);

        Pricing::create([
            'plan' => $request->plan,
            'price' => $request->price,
            'description' => $request->description,
            'features' => $request->features,
        ]);

        return redirect()
            ->route('admin.price')
            ->with('success', 'Pricing added successfully.');
    }

    public function edit($id)
    {
        $pricing = Pricing::findOrFail($id);

        return view('admin.edit_price', compact('pricing'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'plan' => 'required|string',
            'price' => 'required|integer',
            'description' => 'required|string',
            'features' => 'required|string',
        ]);

        $pricing = Pricing::findOrFail($id);

        $pricing->update([
            'plan' => $request->plan,
            'price' => $request->price,
            'description' => $request->description,
            'features' => $request->features,
        ]);

        return redirect()
            ->route('admin.price')
            ->with('success', 'Pricing updated successfully.');
    }

    public function destroy($id)
    {
        $pricing = Pricing::findOrFail($id);

        $pricing->delete();

        return redirect()
            ->route('admin.price')
            ->with('success', 'Pricing deleted successfully.');
    }
}