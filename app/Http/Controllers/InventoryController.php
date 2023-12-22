<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function inbound()
    {
        return view('inventory.inbound');
    }

    public function stock()
    {
        return view('inventory.stock');
    }

    public function stocklist()
    {
        return view('inventory.stocklist');
    }
}
