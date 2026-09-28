<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    function index(){
        $loans = Loan::all();
        // dd($loans);
        return view('loans.index', compact('loans'));
    }
}
