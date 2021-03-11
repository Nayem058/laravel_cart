<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;


class EloquentController extends Controller
{
    public function Home()
    {
    	$companies = Company::all();
        return view('home',compact('companies'));
    }

}
