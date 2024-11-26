<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactusFormRequest;
use App\Models\ContactusRequest;
use App\Models\SupportRequest;
use Illuminate\Http\Request;

class SupportRequestController extends Controller
{
    public function store(ContactusFormRequest $request)
    {
        return response()->json(SupportRequest::query()->create($request->all()), 201);
    }
}
