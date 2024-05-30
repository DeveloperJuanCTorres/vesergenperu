<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxonomy;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;

class AdminController extends Controller
{
    public function index(){
        $category = Taxonomy::all();
        $product = Product::all();
        return view('home',compact('category','product'));
    }

    public function detail(Product $product){
        $category = Taxonomy::all();
        return view('detail',compact('category','product'));
    }
}
