@extends('admin.layout')
@section('content')

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="text-center pb-3">
                                <p class="fs-3 font-monospace">Create Menu</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Desert">
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
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="price" name="price" placeholder="23.5">
                                <label for="price">Price</label>
                                @error('price')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"
                                    style="height: 100px"></textarea>
                                <label for="description">Description</label>
                                @error('description')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <select class="form-select" size="3" multiple id="category" name="category[]"
                                    aria-label="Floating label select example">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                                @error('category')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="float-end">
                                <a href="{{ route('menus.index') }}" class="btn btn-lg btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary btn-lg">Store</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
