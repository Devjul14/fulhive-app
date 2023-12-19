@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">Product Master</h6>
        <div class="col-lg-12">

            <div class="card shadow mb-4">
                <!-- Nav link -->
                <div class="card-header py-3 mb-4">
                    <ul class="nav mt-3 ml-4">
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="akunLink">All Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="timLink">My Team</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                        <div class="row ml-4">
                            <div class="col-lg-11">
                                <div class="mb-4">
                                <button type="button" class="btn btn-outline-primary"><i class="fas fa-solid fa-user-plus"></i>  Add Team</button>
                                </div>
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Access</th>
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
                        <!-- end card tim saya -->
                    </div>
                </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
  // Inisialisasi saat halaman dimuat
  $(document).ready(function() {
    // Atur fungsi klik untuk tautan "Akun Saya"
    $("#akunLink").addClass("active");
    $("#akunCard").show();

    $("#akunLink").click(function() {
      // Aktifkan tautan dan tampilkan kartu "Akun Saya"
      $("#akunLink").addClass("active");
      $("#timLink").removeClass("active");
      $("#akunCard").show();
      $("#timCard").hide();
    });

    // Atur fungsi klik untuk tautan "Tim Saya"
    $("#timLink").click(function() {
      // Aktifkan tautan dan tampilkan kartu "Tim Saya"
      $("#timLink").addClass("active");
      $("#akunLink").removeClass("active");
      $("#timCard").show();
      $("#akunCard").hide();
    });
  });
</script>
@endsection
