<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifyAccountController extends Controller
{
    public function newPassword(Request $request){
        return view('backend.auth.verify_account');
    }
}
