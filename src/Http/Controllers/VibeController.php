<?php

namespace JobMetric\Vibe\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use JobMetric\Panelio\Http\Controllers\Controller;

class VibeController extends Controller
{
    /**
     * index vibe
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        DomiTitle(trans('vibe::base.dashboard.title'));

        return view('vibe::dashboard');
    }
}
