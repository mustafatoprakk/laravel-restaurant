@extends('admin.layout')
@section('content')
    <div class="container" style="margin-top: 7%">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="float-end mb-2">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">New Category</a>
                </div>
                <table class="table table table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody><?php $count = 0; ?>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>image</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
