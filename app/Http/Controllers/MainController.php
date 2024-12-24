<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mains;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function show() {
        $mains = Mains::orderBy('id', 'desc')->cursorPaginate(30);
        return view('forum', compact('mains'));
    }
    public function poster() {
        $mains = Mains::all();
        return view('postshare', compact('mains'));
    }
    public function added() {
        $mains = Mains::all();
        return view('addition', compact('mains'));
    }
    public function share(Request $request) {
        $request->validate([
            'name'=>'required|min:5|max:40',
            'text'=>'required|min:20',
        ]);

        Mains::Create([
            'name' => $request->name,
            'text' => $request->text,
            'user_id' => Auth::id(),
            'complait' => false,
        ]);

        return redirect(to: '/forum');
    }
    public function compl($id) {
        $mains = Mains::findOrFail($id);
        $mains->complait = true;
        $mains->save();

        return redirect(to: '/forum');
    }
    public function myself() {
        $mains = Mains::where('user_id', Auth::id())->get();
        return view('myself', compact('mains'));
    }
    public function showPost($id)
{
    $main = Mains::with('comments')->findOrFail($id);
    return view('post', compact('main'));
}
public function addComment(Request $request, $mainId)
{
    $request->validate([
        'body' => 'required|min:5',
    ]);

    Comment::create([
        'mains_id' => $mainId,
        'author' => Auth::user()->name,
        'body' => $request->body,
    ]);

    return redirect()->route('forum.post', $mainId);
}
}
