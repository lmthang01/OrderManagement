<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function detail(){

        return view('frontend.order.detail');
    }

    public function index(){

        return view('frontend.order.index');
    }

    public function create(){
        return view('frontend.order.create');
    }

    public function update(){
        return view('frontend.order.update');
    }
}
