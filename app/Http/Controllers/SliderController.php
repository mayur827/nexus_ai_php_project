<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    // Show all sliders
    public function index()
    {
        return view('admin.slider');
    }

    // Show Add Slider page
    public function create()
    {
        return view('admin.add_slider');
    }

    // Show Edit Slider page
    public function edit($id)
    {
        return view('admin.edit_slider', compact('id'));
    }
}
