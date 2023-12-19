<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DataTables\AllproductsDataTable;
use App\DataTables\PriceSettingDataTable;

class ProductController extends Controller
{
    //
    public function masterProduct(AllproductsDataTable $dataTable)
    {
        return $dataTable->render('product.product_master');
    }

    public function masterProductDataTables(AllproductsDataTable $dataTable)
    {
        return $dataTable->ajax();
    }

    public function priceSetting(PriceSettingDataTable $dataTable){
        return $dataTable->render('product.price_setting');
    }
}
