<?php

namespace App\Http\Controllers;

use App\Events\PrivateSubmit;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): void
    {
        PrivateSubmit::broadcast($request->user()->id, $request->user()->name, $request->input('chat'));
    }
}
