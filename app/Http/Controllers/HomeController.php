<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pages = Page::query()->with('translations')->where('status', 1)->get();
        $settings = Setting::get();
        $sliders = \App\Models\Slider::query()->with('translations')->where('status', 1)->get();
        $naveBarItems = Page::where('in_navbar', 1)
            ->where('status', 1)
            ->with('translations')
            ->orderBy('created_at', 'asc')
            ->get();
        return view('index', compact('pages', 'naveBarItems', 'settings', 'sliders'));
    }
}
