<?php

namespace App\Http\Controllers;

use App\Models\Mains;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('admin');
    }
    public function show() {
        $mains = Mains::orderBy('id', 'desc')->where('complait',1)->cursorPaginate(10);
        if(!Auth::check() || (Auth::user()->status !== 'admin')) {
            return redirect('/main')->with('error');
        }
        return view('admin', compact('mains'));
    }
    public function del(Mains $main) {
        $main->delete();
        return redirect()->route('admin.table');
    }
}
