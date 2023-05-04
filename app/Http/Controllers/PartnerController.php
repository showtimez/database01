<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $partners = DB::table('partners')->get();

        return view('/chi-siamo.chi-siamo', compact('partners'));
    }

}
