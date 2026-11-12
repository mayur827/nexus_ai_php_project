<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Pricing;

class DashboardController extends Controller
{
    public function index()
    {
        // Helper function to safely count table entries
        $countTable = function ($table) {
            return Schema::hasTable($table)
                ? DB::table($table)->count()
                : 0;
        };

        $counts = [

            'slider' => $countTable('sliders'),

            'hero' => $countTable('heroes'),

            'social' => $countTable('socials'),

            'feature' => $countTable('features'),

            'work' => $countTable('works'),

            'integration' => $countTable('integrations'),

            'price' => Pricing::count(),

            'testimonial' => $countTable('testimonials'),

            'faq' => $countTable('faqs'),

        ];

        // Total website content entries
        $totalEntries = array_sum($counts);

        return view(
            'admin.dashboard',
            compact('counts', 'totalEntries')
        );
    }
}