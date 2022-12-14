@extends('admin.layout')
@section('content')

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
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody><?php $count = 1; ?>
                        @foreach ($menus as $menu)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $menu->name }}</td>
                                <td>
                                    <img src="{{ Storage::url($menu->image) }}" width="45px" height="30px"
                                        alt="">
                                </td>
                                <td>{{ $menu->price . "$" }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('menus.edit', $menu->id) }}"
                                            class="btn btn-success me-2">Update</a>
                                        <form action="{{ route('menus.destroy', $menu->id) }}" method="post"
                                            onsubmit="return confirm('Are you sure you want to delete this Menu?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
