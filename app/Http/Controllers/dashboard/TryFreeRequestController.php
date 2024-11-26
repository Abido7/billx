<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TryFreeFormRequest;
use App\Models\TryFreeRequest;

class TryFreeRequestController extends Controller
{
    public function store(TryFreeFormRequest $request)
    {
        return response()->json(TryFreeRequest::query()->create($request->all()), 201);
    }
}
