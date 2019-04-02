<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('web');
    }

    public function dashboard() {
        $contact = Contact::all()->first();
        return view('dashboard',compact('contact'));
    }
}
