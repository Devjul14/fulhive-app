@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">Inbound</h6>
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
            <div class="row">
                <button type="button" class="btn btn-outline-primary mr-2">
                    <i class="fas fa-solid fa-barcode"></i> Print Barcode
                </button>
                <button type="button" class="btn btn-outline-primary mr-2">
                    <i class="fas fa-solid fa-download"></i> Download Laporan
                </button>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        Buat Inbound
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Send Stock</a>
                        <a class="dropdown-item" href="#">Batch Inbound</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="col-lg-12 ml-4 mb-4">
                    <!-- Nav link -->
                    <div class="card-header py-3 mb-4">
                        <ul class="nav nav-pills justify-content-between mt-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="created">Created</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="send">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="received">Received</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="confirmed">Confirmed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="done">Done</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="all">All</a>
                            </li>
                        </ul>
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
                            <label for="">Sort by</label>
                            <select class="form-control" id="select2-sort">
                                <option value="all">Date Inbound</option>
                                <!-- Add other status options here -->
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="" class="mb-4" style="margin: 9;"></label><br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-4">
                    <div class="col-lg-11">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Inbound Code</th>
                                    <th scope="col">Inbound Date</th>
                                    <th scope="col">Total Sku</th>
                                    <th scope="col">Total Qty</th>
                                    <th scope="col">Total Cost</th>
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
        // $('#select2-periode').select2();
        // $('#select2-sort').select2();
        var inputBulan = document.getElementById('month');
        var tanggalSaatIni = new Date();

        var tahun = tanggalSaatIni.getFullYear();
        var bulan = ('0' + (tanggalSaatIni.getMonth() + 1)).slice(-2);
        inputBulan.value = tahun + '-' + bulan;


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
            showCard("createdCard");
            setActiveMenu("created");

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
