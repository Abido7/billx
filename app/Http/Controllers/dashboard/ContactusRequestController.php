<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactusFormRequest;
use App\Models\ContactusRequest;
use Illuminate\Http\Request;

class ContactusRequestController extends Controller
{
    public function store(ContactusFormRequest $request)
    {
        return response()->json(ContactusRequest::query()->create($request->all()), 201);
    }
}
