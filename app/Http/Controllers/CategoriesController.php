<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{    
    public function categoryAction($id) {        
        $category = Categories::find($id);
        if ($category) {
            //echo($category);
            $products = Products::find(['category_id' => $category->id]);
            
            return view('products', ['products' => $products]);
        }
        
    }
}
