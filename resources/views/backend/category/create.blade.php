@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/category">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/category" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="photo">Upload an Image</label>
                                <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-danger float-right">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection