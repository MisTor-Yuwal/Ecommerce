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
                        <form action="/products/{{ $product->id }}/edit" method="post" enctype="multipart/form-data"> 
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $products->name }}">
                            </div>
                            <div class="form-group">
                                <label for="serial_number">Serail Number</label>
                                <input id="serial_number" class="form-control" type="text" name="serial_number" value="{{ $products->serial_number }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input id="price" class="form-control" type="text" name="price" value="{{ $products->price }}">
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input id="photo" class="form-control-file" type="file" name="photo">
                            </div>
                            <div class="my-2">
                                <img src="{{ asset($products->photo) }}" width="150" alt="">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="3">{{ $products->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="mfd">M.F.D</label>
                                <input id="mfd" class="form-control" type="date" name="mfd" value="{{ $products->mfd }}">
                            </div>
                            <button class="btn btn-dark float-right my-4" type="submit">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection