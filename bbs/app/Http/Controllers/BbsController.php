<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Thread;
use App\Bbs;

class BbsController extends Controller
{
    public function index(){
        return view('bbs.index');
    }

    public function create($id){
        $thread = Thread::where('id', $id)->get()->first();
        // dd($thread);
        return view('bbs.create')->with('thread', $thread);
    }

    public function show(Request $request){
        $thread = Thread::where('id', $request->bbs)->get();
        $bbs = Bbs::where('thread_id', $request->bbs)->paginate(5);
        return view('bbs.show')->with(array('thread' => $thread, 'bbs' => $bbs));
    }

    public function store(Request $request, $thread_id){
        // dd($thread_id);
        Bbs::create(array('thread_id' => $thread_id, 'name' => $request->name, 'content' => $request->content));
        return redirect ("/bbs/{$thread_id}");
    }
}
