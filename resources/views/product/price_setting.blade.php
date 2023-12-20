@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <h6 class="h3 mb-3 text-gray-800 ml-3">Price Setting</h6>
        <div class="text-right">
            <button class="btn btn-secondary">Import of price changes</button>
            <button class="btn btn-primary">Download List price changes</button>
        </div>
    </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row ml-4 mb-4">
                        <div class="dropdown mr-2">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                Marketplace
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                Store
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                            </div>
                        </div>
                        <div class="row ml-4">
                            <div class="col-lg-11">
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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script>
        $(document).ready(function() {

            $(".dropdown-toggle").dropdown();
        });
    </script>



@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
