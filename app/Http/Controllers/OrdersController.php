<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Factories\Input;

class OrdersController extends Controller
{
    public function buyAction($id) {
        $good = Products::find($id);
        if($good) {
            return view('order', ['products_id' => $id]);
        }
    }
    
    public function finishAction() {
        $allData = Input::all();
        $order = new Orders();
        $order->customer_name = $allData->customer_name;
        //....
        $order->save();
    }
}
