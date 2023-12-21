@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-lg-6">
            <h6 class="h3 mb-3 text-gray-800 ml-3">Warehouse Exit List</h6>
        </div>

    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="col-lg-6">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <select class="form-control" id="warehouseDropdown">
                                <option value="all">All Warehouse</option>
                                <!-- Add other warehouse options here -->
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="daterange" id="dateSearch" placeholder="Search by Date">

                        </div>
                        <div class="form-group col-md-3">
                            <select class="form-control" id="statusDropdown">
                                <option value="all">All Status</option>
                                <!-- Add other status options here -->
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row ml-4">
                    <div class="col-lg-11">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Warehouse Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
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

<script type="text/javascript">
    $(function() {
        $('input[name="daterange"]').daterangepicker();
    });
</script>
@endsection