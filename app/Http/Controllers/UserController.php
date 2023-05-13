<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    public function profile(){
        $consoles = Console::where('user_id', Auth::user()->id)
                            ->orderBy('created_at', 'DESC')
                            ->get();

        return view('user.profile');
    }
}
