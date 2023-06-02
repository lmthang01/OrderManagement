<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index(){

        $contacts = Contact::orderByDesc('id')->paginate(20); // Phân trang 20 dòng
        $viewData = [
            'contacts' => $contacts
        ];
        return view('frontend.contact.index', $viewData);
    }

    public function create(){
        return view('frontend.contact.create');
    }

    public function update(){
        return view('frontend.contact.update');
    }
}
