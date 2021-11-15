<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryResquest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

    }

    public function add(){
        return view('category.add');
    }

    public function store(CategoryResquest $request){
        $params = $request->validated();
        
        Category::create($params);
        
        return back();
    }


}
