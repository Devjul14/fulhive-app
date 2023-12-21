@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <h6 class="h3 mb-3 text-gray-800 ml-3">My Warehouses</h6>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 mb-4">
                <ul class="nav nav-pills mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="mywarehouse">My Warehouses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="requestwarehouse">Request Warehouse</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row ml-4" id="mywarehouseCard">
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row ml-4" id="requestwarehouseCard" style="display: none;">
                    <div class="col-lg-11">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Warehouse Name</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Performance</th>
                                    <th scope="col">Status</th>
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

<script>
    $(document).ready(function() {
        $("#mywarehouse").addClass("active");
        $("#mywarehouseCard").show();

        $("#mywarehouse").click(function() {
            $("#mywarehouse").addClass("active");
            $("#requestwarehouse").removeClass("active");
            $("#mywarehouseCard").show();
            $("#requestwarehouseCard").hide();
        });


        $("#requestwarehouse").click(function() {
            $("#requestwarehouse").addClass("active");
            $("#mywarehouse").removeClass("active");
            $("#requestwarehouseCard").show();
            $("#mywarehouseCard").hide();
        });
    });
</script>


@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush