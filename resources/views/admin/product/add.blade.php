@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">
                                Add Product
                            </h1>
                        </div>
                        <div class="card-body">
                            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                            <form action="{{route('product.create')}}" class="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="category">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="brand">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="add_product_btn" value="Add Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
