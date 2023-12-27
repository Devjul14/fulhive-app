<?php

namespace App\Http\Controllers;

use App\Models\Warehouses;
use Illuminate\Http\Request;
use App\DataTables\WarehousesDataTable;

class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        //
        $warehouses = Warehouses::latest()->paginate(5);
        // dd($warehouses);
        return view('warehouse.find', [
            'warehouses' => $warehouses
        ]);
    }

    public function find(Request $request)
    {
        //
        $query = $request->get('query');
        $warehouses = Warehouses::where('name', 'LIKE', '%' . $query . '%')->get();

        return response()->json($warehouses);
    }

    public function mywarehouse(WarehousesDataTable $dataTable)
    {
        return $dataTable->render('warehouse.mywarehouse');
    }

    public function move()
    {
        //
        $warehouses = Warehouses::latest()->paginate(5);
        // dd($warehouses);
        return view('warehouse.move', [
            'warehouses' => $warehouses
        ]);
    }

    public function exit()
    {
        //
        $warehouses = Warehouses::latest()->paginate(5);
        // dd($warehouses);
        return view('warehouse.exit', [
            'warehouses' => $warehouses
        ]);
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
