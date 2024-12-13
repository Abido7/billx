<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Plan;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $route = \Illuminate\Support\Str::afterLast(url()->current(), '/');
        $pages = Page::where('status', 1)->with('translations')->get();
        $plans = Plan::query()->with(['translations', 'options'])->where('status', operator: 1)->orderByDesc('price')->get();
        $settings = Setting::get();
        $naveBarItems = Page::where('in_navbar', 1)
            ->where('status', 1)
            ->orderBy('created_at', 'asc')
            ->with('translations')->get();

        return view($pages->pluck('link')->contains($route) ? $route : '404', compact('route', 'settings', 'plans', 'naveBarItems', 'pages'));
    }
}
