@extends('admin.layout')
@section('content')

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
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody><?php $count = 1; ?>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row"><?= $count++ ?></th>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <img src="{{ Storage::url($category->image) }}" width="45px" height="30px"
                                        alt="">
                                </td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-success me-2">Edit</a>
                                        <form action="{{ route('categories.update', $category->id) }}" method="post"
                                            onsubmit="return confirm('Are you sure you want to delete this category?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
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
