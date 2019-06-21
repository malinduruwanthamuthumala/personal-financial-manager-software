<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FinanceInstitute;

class InvestmentController extends Controller
{
    public function index(){
        return view('investment');
    }

    public function create(){
        $methods = FinanceInstitute::all();
        dd($methods);

       
    }
}
