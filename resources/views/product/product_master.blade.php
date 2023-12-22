@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">Product Master</h6>
    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <!-- Nav link -->
            <div class="card-header py-3 mb-4">
                <ul class="nav nav-pills  mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="all-product">All Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="unit-product">Products Unit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="type-product">Product Type</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="bundling-product">Products Bundling</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="row ml-4" id="all-productCard">
                    <div class="col-lg-11">
                        {{ $dataTable->table() }}
                    </div>
                </div>
                <div class="row ml-4" id="unit-productCard" style="display: none;">
                    <div class="col-lg-11">
                        <h6>unit</h6>
                        {{ $dataTable->table() }}
                    </div>
                </div>
                <div class="row ml-4" id="type-productCard" style="display: none;">
                    <div class="col-lg-11">
                        <h6>type</h6>
                        {{ $dataTable->table() }}
                    </div>
                </div>
                <div class="row ml-4" id="bundling-productCard" style="display: none;">
                    <div class="col-lg-11">
                        <h6>bundling</h6>
                        {{ $dataTable->table() }}
                    </div>
                </div>
            </div>
            <!-- end card tim saya -->
        </div>
    </div>
</div>
</div>
</div>


<script>
    $(document).ready(function() {
        $("#all-product").addClass("active");
        $("#all-productCard").show();

        $("#all-product").click(function() {
            $("#all-product").addClass("active");
            $("#unit-product").removeClass("active");
            $("#type-product").removeClass("active");
            $("#bundling-product").removeClass("active");
            $("#all-productCard").show();
            $("#unit-productCard").hide();
            $("#type-productCard").hide();
            $("#bundling-productCard").hide();
        });


        $("#unit-product").click(function() {
            $("#unit-product").addClass("active");
            $("#all-product").removeClass("active");
            $("#type-product").removeClass("active");
            $("#bundling-product").removeClass("active");
            $("#unit-productCard").show();
            $("#all-productCard").hide();
            $("#type-productCard").hide();
            $("#bundling-productCard").hide();
        });

        $("#type-product").click(function() {
            $("#type-product").addClass("active");
            $("#bundling-product").removeClass("active");
            $("#unit-product").removeClass("active");
            $("#all-product").removeClass("active");
            $("#type-productCard").show();
            $("#unit-productCard").hide();
            $("#all-productCard").hide();
            $("#bundling-productCard").hide();
        });

        $("#bundling-product").click(function() {
            $("#bundling-product").addClass("active");
            $("#type-product").removeClass("active");
            $("#unit-product").removeClass("active");
            $("#all-product").removeClass("active");
            $("#bundling-productCard").show();
            $("#type-productCard").hide();
            $("#unit-productCard").hide();
            $("#all-productCard").hide();
        });
    });
</script>
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush