<style>
    .photo-upload-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .photo-upload-grid {
        display: flex;
        gap: 10px;
        /* Atur jarak antar elemen */
    }

    .photo-upload-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 2px dashed #00b4d8;
        border-radius: 10px;
        width: 100px;
        /* Atur lebar box */
        height: 100px;
        /* Atur tinggi box */
    }

    .photo-upload-input {
        display: none;
        /* Sembunyikan input file asli */
    }

    .photo-upload-label {
        cursor: pointer;
        text-align: center;
    }
</style>
@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row col-lg-12">
        <div class="col-md-6 text-left">
            <h6 class="h3 mb-3 text-gray-800">Product Master</h6>
        </div>
        <div class="col-md-6">
            <div class="row justify-content-end">
                <div class="dropdown mr-2">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        Product
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addModal"><i class="fas fa-solid fa-plus"></i> Add Product</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-solid fa-arrow-down"></i> Pull Product</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-regular fa-download"></i> Download Product</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-solid fa-arrow-up"></i> Upload Product</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-solid fa-pen"></i> Edit Product</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        Product Bundling
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fas fa-solid fa-plus"></i> Add Bundling</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-regular fa-download"></i> Download Bundling</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-solid fa-arrow-up"></i> Upload Bundling</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Product Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data" class="ml-3">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-lg-8 mr-3">
                                <label for="name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="sku" class="col-form-label">Sku Number</label>
                                <input type="text" class="form-control" name="sku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sku" class="col-form-label">Category</label>
                            <select class="form-control" name="category_id">
                                <option>-- product category --</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea class="form-control" id="message-text" cols="40" name="description"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="weight" class="col-form-label">Weight</label>
                                <input type="text" class="form-control" name="weight">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="size" class="col-form-label">Size</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control mb-2" name="size" placeholder="Size">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control mb-2" name="width" placeholder="Width">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="high" placeholder="High">
                                </div>
                            </div>
                        </div>
                        <div class="photo-upload-container">
                            <label for="productPhotos">Foto Produk</label>
                            <div class="photo-upload-grid">
                                <div class="photo-upload-box">
                                    <input type="file" id="mainPhoto" name="photo" accept="image/*" class="photo-upload-input">
                                    <label for="mainPhoto" class="photo-upload-label">Main Photo</label>
                                </div>
                                <div class="photo-upload-box">
                                    <input type="file" id="secondPhoto" name="photo" accept="image/*" class="photo-upload-input">
                                    <label for="secondPhoto" class="photo-upload-label">Foto</label>
                                </div>
                                <!-- Ulangi untuk foto lainnya -->
                                <!-- Pastikan untuk mengganti 'for' dan 'id' dengan nilai yang unik untuk setiap input -->
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="cost_of_goods" class="col-form-label">Cost of goods</label>
                                <input type="text" class="form-control" name="cost_of_goods">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="consumer_price" class="col-form-label">Consumer price</label>
                                <input type="text" class="form-control" name="consumer_price">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

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
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Isi tabel akan dimuat di sini -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row ml-4" id="unit-productCard" style="display: none;">
                    <div class="col-lg-11">
                        <h6>unit</h6>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Isi tabel akan dimuat di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row ml-4" id="type-productCard" style="display: none;">
                    <div class="col-lg-11">
                        <h6>type</h6>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Isi tabel akan dimuat di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row ml-4" id="bundling-productCard" style="display: none;">
                    <div class="col-lg-11">
                        <h6>bundling</h6>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Isi tabel akan dimuat di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end card tim saya -->
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable();

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

        let reader = new FileReader();
        reader.onload = function() {
            let imgElement = document.createElement('img');
            imgElement.src = reader.result;
            imgElement.style.width = '100px'; // Sesuaikan dengan ukuran box
            imgElement.style.height = '100px'; // Sesuaikan dengan ukuran box
            document.querySelector('.photo-upload-box').appendChild(imgElement);
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection