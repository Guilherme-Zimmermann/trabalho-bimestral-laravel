<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        $finances = Finance::all();
        return view('finances.index', compact('finances'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'value' => 'required|numeric',
            'type' => 'required|in:pagar,receber',
        ]);

        Finance::create($request->all());
        return redirect()->route('finances.index');
    }
}
