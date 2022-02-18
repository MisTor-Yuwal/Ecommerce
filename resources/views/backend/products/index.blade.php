@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/products/create" class="badge bg-dark">Add Product</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>SerialNumber</th>
                                <th>Price</th>
                                <th>M.F.D</th>
                                <th>Action</th>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection