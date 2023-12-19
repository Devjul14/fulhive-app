@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">Store Information</h6>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block" alt="Profile Photo">
                                        <div class="card-body text-center">
                                            <button type="button" class="btn btn-outline-primary mb-4 mt-4">Add Photo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="card-header py-3 mb-4">
                                                <h6 class="m-0 font-weight-bold text-gray-700">Information</h6>
                                            </div>
                                            <form class="ml-3">
                                                    <div class="row">
                                                        <div class="col-lg-5 mr-4">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 mr-4">
                                                            <div class="form-group">
                                                                <label>Area</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 mr-4">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea class="form-control" cols="60" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 ml-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="card-header py-3 mb-4">
                                                <h6 class="m-0 font-weight-bold text-gray-700">Your Marketplace Link</h6>
                                            </div>
                                            <div class="col-lg-11">
                                                <div class="mb-4">
                                                <button type="button" class="btn btn-outline-primary"><i class="fas fa-solid fa-user-plus"></i>  Add Store</button>
                                                </div>
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>



@endsection
