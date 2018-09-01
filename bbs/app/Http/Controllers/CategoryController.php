<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
        // $category = Category::find($request->id);
        $category = Category::where('category_id', $request->id)->get();//これでカテゴリーIDごとに紐付け取得ができる。
        return view('categories.index')->with('category', $category);
    }
}
