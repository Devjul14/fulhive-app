@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <h6 class="h3 mb-3 text-gray-800 ml-3">Products Marketplace</h6>
        <div class="text-right">
            <button class="btn btn-primary">Add Store</button>
        </div>
    </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                    <div class="card-body">
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

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
