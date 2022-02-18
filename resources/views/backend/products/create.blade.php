@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/products" class="btn btn-danger btn-small">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/product" method="post" enctype="multipart/form-data"> 
                            @csrf
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span> </label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="serial_number">Serail Number</label>
                                <input id="serial_number" class="form-control" type="text" name="serial_number">
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input id="price" class="form-control" type="text" name="price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="discount_per">Discount</label>
                                        <input id="discount_per" class="form-control" type="text" name="discount_per">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="mfd">M.F.D</label>
                                <input id="mfd" class="form-control" type="date" name="mfd">
                            </div>
                            <button class="btn btn-dark float-right my-4" type="submit">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection