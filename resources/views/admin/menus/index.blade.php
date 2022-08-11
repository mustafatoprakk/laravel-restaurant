@extends('admin.layout')
@section('content')
    <div class="container" style="margin-top: 7%">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="float-end mb-2">
                    <a href="{{ route('menus.create') }}" class="btn btn-primary">New Menu</a>
                </div>
                <table class="table table table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody><?php $count = 0; ?>
                        @foreach ($menus as $menu)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->description }}</td>
                                <td>image</td>
                                <td>{{ $menu->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
