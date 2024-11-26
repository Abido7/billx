<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $route = \Illuminate\Support\Str::afterLast(url()->current(), '/');
        $pages = Page::where('status', 1)->with('translations')->get();
        $settings = Setting::get();
        $naveBarItems = Page::where('in_navbar', 1)
            ->where('status', 1)
            ->with('translations')->get();
        if ($pages->pluck('link')->contains($route)) {

            return view($route, compact('route', 'settings', 'naveBarItems', 'pages'));
        } else {

            return view('404', compact('route', 'settings', 'naveBarItems', 'pages'));
        }
    }
}
