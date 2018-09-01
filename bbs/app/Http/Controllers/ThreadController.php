<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Thread;
use App\Category;

class ThreadController extends Controller
{
    public function create($id){
        $category = Thread::where('category_id', $id)->get()->first();//使っていません。後ほど削除します。
        $empty_category = Category::where('id', $id)->get()->first();
        // dd($empty_category);
        return view('threads.create')->with(array('category' => $category, 'empty_category' => $empty_category));
    }

    public function show(Request $request){
        $thread = Thread::where('category_id', $request->thread)->get();//これでカテゴリーIDごとに紐付け取得ができる。
        $empty_thread = Category::where('id', $request->thread)->get()->first();
        return view('threads.show')->with(array('thread' => $thread, 'empty_thread' => $empty_thread));
    }

    public function store(Request $request, $category_id){
        // dd($category_id);
        Thread::create(array('category_id' => $category_id, 'name' => $request->name, 'content' => $request->content));
        // return view('threads.store');
        return redirect ("/thread/{$category_id}");
    }
}
