<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function masterProduct()
    {
        //
        $user_id = Auth::id();

        $product = Products::find($user_id);
        $products = Products::all();
        return view('product.product_master', [
            'product' => $product,
            'products' => $products,
        ]);
    }

}
