<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\RedirectController;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($id){
        Category::find($id)->delete();
        return redirect()->route('categories.index');
    }
}
