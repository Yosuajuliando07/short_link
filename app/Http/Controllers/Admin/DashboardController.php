<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShortLink;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $shortLinks =  Auth::user()->shortlink()->latest()->paginate(1);
        return view('admin.dashboard', compact('shortLinks'));
    }
}
