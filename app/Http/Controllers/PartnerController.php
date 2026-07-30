<?php

namespace App\Http\Controllers;

use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('sort')->get();

        return view('pages.partners', compact('partners'));
    }
}