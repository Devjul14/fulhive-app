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

class ProductController extends Controller
{
    //
    public function index(ProductsDataTable $dataTable)
    {
        return $dataTable->render('product.product_master');
    }

    public function priceSetting(PriceSettingDataTable $dataTable)
    {
        return $dataTable->render('product.price_setting');
    }

    public function productMarketplace(ProductMarketplaceDataTable $dataTable)
    {
        return $dataTable->render('product.product_marketplace');
    }
}
