@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">List Warehouses</h6>
    <div class="col-lg-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="find warehouse here" aria-label="find warehouse here" aria-describedby="basic-addon2">
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row mt-3">
                    <button type="button" class="btn btn-outline-primary ml-4 mr-2"><i class="fas fa-solid fa-list"></i> Filter</button>
                    <button type="button" class="btn btn-outline-secondary">All</button>
                </div>

                <div class="" id="searchResults">

                </div>

                @foreach ($warehouses as $warehouse)
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row mb-3">

                            <div class="col-md-2">
                                <img src="https://placekitten.com/150/150" alt="Oval Image" class="img-fluid rounded">
                            </div>
                            <!-- Informasi di sebelah kanan -->
                            <div class="col-md-8">
                                <h5 class="card-title font-weight-bold">{{ $warehouse->name }}</h5>
                                <p class="card-text"><i class="fas fa-solid fa-map-pin"></i> {{ $warehouse->address }}</p>
                                <p class="card-text"><small class="text-muted">Terakhir diperbarui 3 menit yang lalu</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">

                {!! $warehouses->links() !!}
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#searchInput').keyup(function() {
            var query = $(this).val();

            $.ajax({
                url: '/find',
                type: 'GET',
                data: {
                    query: query
                },
                success: function(data) {
                    var html = '';
                    $.each(data, function(index, warehouse) {
                        html += `
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <img src="https://placekitten.com/150/150" alt="Oval Image" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="card-title font-weight-bold">${warehouse.name}</h5>
                                        <p class="card-text"><i class="fas fa-solid fa-map-pin"></i> ${warehouse.address}</p>
                                        <p class="card-text"><small class="text-muted">Terakhir diperbarui 3 menit yang lalu</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });
                    $('#searchResults').html(html);
                },
                error: function(request, status, error) {
                    $('#searchResults').html('<p>Terjadi kesalahan saat melakukan pencarian.</p>');
                }
            });
        });
    });
</script>

@endsection