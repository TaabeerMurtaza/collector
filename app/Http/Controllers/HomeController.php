<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Debt;

class HomeController extends Controller
{
    public function getCase(Request $request)
    {
        $number = $request->number;
        $debt = Debt::where('primary_phone', $number)->first();
        dd($debt);
    }
}
    