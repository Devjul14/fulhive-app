@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">Stock List</h6>
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
        <div class="col-lg-6 text-right mt-4">
            <button type="button" class="btn btn-outline-primary mr-2">
                <i class="fas fa-solid fa-download"></i> Download Stock
            </button>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="col-lg-12 ml-4 mb-4">
                    <!-- Nav link -->
                    <div class="card-header py-3 mb-4">
                        <ul class="nav nav-pills mt-3 text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="all">all</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="send">Stock Low</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="received">Out of Stock</a>
                            </li>
                        </ul>
                    </div>
                    <div class="form-row justify-content-end">
                        <div class="form-group col-md-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4">
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">Product</th>
                                    <th colspan="2" class="text-center">Available Stock - Seller Data</th>
                                    <th colspan="2" class="text-center">Available Stock - Warehouse Data</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Normal</th>
                                    <th class="text-center">Reject</th>
                                    <th class="text-center">Normal</th>
                                    <th class="text-center">Reject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <!-- Tambahkan baris lain sesuai kebutuhan -->
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
        // Fungsi untuk menampilkan kartu yang sesuai dengan menu yang diklik
        function showCard(cardId) {
            $(".card-content").hide();
            $("#" + cardId).show();
        }

        // Fungsi untuk mengatur status aktif pada menu yang diklik
        function setActiveMenu(menuId) {
            $(".nav-link").removeClass("active");
            $("#" + menuId).addClass("active");
        }

        $(document).ready(function() {
            // Mengatur kartu pertama sebagai default yang ditampilkan
            showCard("allCard");
            setActiveMenu("all");

            // Menangani klik pada setiap menu
            $(".nav-link").click(function() {
                var menuId = $(this).attr("id");
                var cardId = menuId + "Card";
                showCard(cardId);
                setActiveMenu(menuId);
            });
        });

    });
</script>
@endsection