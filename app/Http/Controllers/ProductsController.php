<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showAction($id) {
        $good = Products::find($id);
        if ($good) {
            return view('goods', ['product' => $good]);
        }
    }
}
