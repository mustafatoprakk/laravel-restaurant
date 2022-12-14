@extends('admin.layout')
@section('content')

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="text-center pb-3">
                                <p class="fs-3 font-monospace">Create Category</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Breakfast">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control form-control-lg" id="image" name="image">
                                <label class="input-group-text" for="image">Image Upload</label>
                            </div>
                            @error('image')
                                <div class="alert alert-danger mt-1 mb-3">{{ $message }}</div>
                            @enderror
                            <div class="form-floating mb-4">
                                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"
                                    style="height: 100px"></textarea>
                                <label for="description">Description</label>
                                @error('description')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="float-end">
                                <a href="{{ route('categories.index') }}" class="btn btn-lg btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary btn-lg">Store</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
