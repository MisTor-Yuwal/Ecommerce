@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/category/create" class="badge bg-dark" >Add Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>S.N</th>
                                <th>Category Name</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td><img src="{{ asset($item->photo) }}" width="100" alt=""></td>
                                    <td>
                                        <a href="/category/{{ $item->id }}/edit" class="badge bg-dark">Edit</a>
                                        <a href="/category/{{ $item->id }}/show" class="badge bg-primary">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection