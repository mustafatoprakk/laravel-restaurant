@extends('admin.layout')
@section('content')

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="text-center pb-3">
                                <p class="fs-3 font-monospace">Update Category</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $category->name }}" placeholder="Breakfast">
                                <label for="name">Name</label>
                            </div>
                            <div class="mb-3">
                                <img src="{{ Storage::url($category->image) }}" class="img-fluid" alt="Old image">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control form-control-lg" id="image" name="image">
                                <label class="input-group-text" for="image">Image Upload</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"
                                    style="height: 100px">{{ $category->description }}</textarea>
                                <label for="description">Description</label>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('categories.index') }}" class="btn btn-lg btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
