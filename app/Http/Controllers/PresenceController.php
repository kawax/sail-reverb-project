<?php

namespace App\Http\Controllers;

use App\Events\PresenceSubmit;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): void
    {
        PresenceSubmit::broadcast($request->user()->name, $request->input('chat'));
    }
}
