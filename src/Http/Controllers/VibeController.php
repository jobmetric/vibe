<?php

namespace JobMetric\Vibe\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class VibeController extends Controller
{
    /**
     * index vibe
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('vibe::index');
    }
}
