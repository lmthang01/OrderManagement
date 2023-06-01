<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        return view('frontend.contact.index');
    }

    public function create(){
        return view('frontend.contact.create');
    }

    public function update(){
        return view('frontend.contact.update');
    }
}
