<?php

namespace App\Http\Controllers;

use App\Models\Warehouses;
use Illuminate\Http\Request;

class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function find()
    {
        //
        $warehouses = Warehouses::latest()->paginate(5);
        // dd($warehouses);
        return view('warehouse.find', [
            'warehouses' => $warehouses
        ]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Warehouses $warehouses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warehouses $warehouses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warehouses $warehouses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warehouses $warehouses)
    {
        //
    }
}
