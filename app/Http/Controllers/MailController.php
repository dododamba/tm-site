<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordUpdated;


class MailController extends Controller
{
    public function passwordUpdated()
    {

    }
}
