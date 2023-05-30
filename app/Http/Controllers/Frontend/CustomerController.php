<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        return view('frontend.customer.index');
    }

    public function create()
    {
        return view('frontend.customer.create');
    }

    public function detail(){

        return view('frontend.customer.detail');
    }

    public function update(){

        return view('frontend.customer.update');
    }

}
