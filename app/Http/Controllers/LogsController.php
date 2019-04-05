<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Log;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class LogsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $logs = Log::orderBy('created_at','desc')->get();

        defaultLog(Log::class);
        return view('backEnd.admin.logs.index', compact('logs'));
    }

}
