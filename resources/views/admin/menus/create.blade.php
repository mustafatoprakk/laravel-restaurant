@extends('admin.layout')
@section('content')
    <div class="container" style="margin-top: 7%">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <form action="{{ route('menus.store') }}" method="post">
                            @csrf
                            <div class="text-center pb-3">
                                <p class="fs-3 font-monospace">Create Menu</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Desert">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control form-control-lg" id="image" name="image">
                                <label class="input-group-text" for="image">Image Upload</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="price" name="price" placeholder="23.5">
                                <label for="price">Price</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"
                                    style="height: 100px"></textarea>
                                <label for="description">Description</label>
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
    </div>
@endsection
