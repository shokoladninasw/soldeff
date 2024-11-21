<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function show() {
        return view('log');
    }
    public function share(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('main')->with('success', 'Вы успешно вошли в систему!');
        }
        return redirect()->back()->withErrors([
            'email' => 'Эти учетные данные не соответствуют нашим записям.',
        ])->withInput();
    }
}
