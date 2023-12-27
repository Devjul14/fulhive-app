<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\Auth;
use App\DataTables\ProductsDataTable;
use App\DataTables\AllproductsDataTable;
use App\DataTables\PriceSettingDataTable;
use App\DataTables\ProductMarketplaceDataTable;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    //
    public function product()
    {
        $categories = ProductCategory::all();
        $products = Products::all();
        return view('product.product_master', compact('products', 'categories'));
    }

    public function addproduct(Request $request)
    {
        dd($request);
    }

    public function pricesetting(PriceSettingDataTable $dataTable)
    {
        return view('product.price_setting');
    }

    public function marketplace(ProductMarketplaceDataTable $dataTable)
    {
        return view('product.product_marketplace');
    }
}
