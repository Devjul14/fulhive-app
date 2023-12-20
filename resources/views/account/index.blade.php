@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-gray-800 ml-3">Account</h6>
        <div class="col-lg-12">

            <div class="card shadow mb-4">
            <!-- Nav link -->
            <ul class="nav nav-pills mt-3 ml-4">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="akunLink">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="timLink">My Team</a>
                </li>
            </ul>
            <!-- card akun saya -->
            <div class="card-body">
                    <div class="row" id="akunCard" style="display: none;">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block" alt="Profile Photo">
                                    <div class="card-body text-center">
                                        <button type="button" class="btn btn-outline-primary">Add Photo</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-header py-3 mb-4">
                                            <h6 class="m-0 font-weight-bold text-gray-700">Informasion</h6>
                                        </div>
                                        <!-- <div class="col-md-8"> -->
                                            <form class="ml-3">
                                                <div class="row">
                                                    <div class="col-lg-5 mr-4">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" value="{{ $user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 mr-4">
                                                        <div class="form-group">
                                                            <label>Access</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 mr-4">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" value="{{ $user->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 mr-4">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 mr-4">
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" value="{{ $user->password}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card akun saya -->

                    <!-- card tim saya -->
                    <div class="row ml-4" id="timCard" style="display: none;">
                        <div class="col-lg-11">
                            <div class="mb-4">
                            <button type="button" class="btn btn-outline-primary"><i class="fas fa-solid fa-user-plus"></i>  Add Team</button>
                            </div>
                            <table class="table">
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
