@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">Stock Mutation List</h6>
    <div class="row justify-content-between">
        <div class="col-lg-4">
            <div class="form-group col-md-8">
                <label for="">Pilih Gudang</label>
                <select class="form-control" id="select2-periode">
                <option value="all">Example</option>
                    <option value="all">Test</option>
                    <!-- Add other warehouse options here -->
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="col-lg-12 ml-4 mb-4">
                    <div class="card-header mb-4">
                        <div class="row justify-content-between">                            
                                <h6 class="mb-3 text-gray-800 text-md font-weight-bold">Stock Mutation</h6>
                                <button type="button" class="btn btn-outline-primary mr-2">
                                    <i class="fas fa-solid fa-download"></i> Download Stock
                                </button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="">Periode</label>
                            <select class="form-control" id="select2-periode">
                                <option value="all">Month</option>
                                <option value="all">Day</option>
                                <!-- Add other warehouse options here -->
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="mb-4" style="margin: 9;"></label><br>
                            <input type="month" class="form-control" id="month" placeholder="Search by Date">

                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Filter</label>
                            <select class="form-control" id="select2-sort">
                                <option value="all">Date Inbound</option>
                                <!-- Add other status options here -->
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="mb-4" style="margin: 9;"></label><br>
                            <button type="button" class="btn btn-warning mr-2">Show</button>
                        </div>
                    </div>
                </div>
                <div class="row ml-4">
                    <div class="col-lg-11">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    
                                    <th scope="col">Product</th>
                                    <th scope="col">Awal</th>
                                    <th scope="col">Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                                <!-- Add other table rows here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
