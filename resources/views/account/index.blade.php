@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h6 class="h3 mb-3 text-primary ml-3">Akun</h6>
        <div class="col-lg-12">

            <div class="card mb-4">
            <!-- Nav link -->
            <ul class="nav mt-3 ml-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">Akun Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tim Saya</a>
                </li>
            </ul>
            <!-- card akun saya -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">

                            <div class="card mb-4">
                                <div class="card-body">
                                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block" alt="Profile Photo">
                                    <div class="card-body text-center">
                                        <button type="button" class="btn btn-outline-primary">Tambah Foto</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">

                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="card-header py-3 mb-4">
                                            <h6 class="m-0 font-weight-bold text-gray-700">Informasi</h6>
                                        </div>
                                        <!-- <div class="col-md-8"> -->
                                            <form class="ml-3">
                                                <div class="row">
                                                    <div class="col-lg-5 mr-4">
                                                        <div class="form-group">
                                                            <label>Nama Lengkap</label>
                                                            <input type="text" class="form-control" value="{{ $user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 mr-4">
                                                        <div class="form-group">
                                                            <label>Jenis Akses</label>
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
                                                            <label>No Handphone</label>
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
                </div>
                </div>
            </div>
            <!-- end card akun saya -->
        </div>
    </div>
</div>
@endsection
