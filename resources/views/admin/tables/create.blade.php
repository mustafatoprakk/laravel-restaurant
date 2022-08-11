@extends('admin.layout')
@section('content')
    <div class="container" style="margin-top: 7%">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <form action="{{ route('tables.store') }}" method="post">
                            @csrf
                            <div class="text-center pb-3">
                                <p class="fs-3 font-monospace">Create Table</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Breakfast">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="guest_number" name="guest_number"
                                    placeholder="6">
                                <label for="guest_number">Guest Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="status" name="status"
                                    placeholder="Available">
                                <label for="status">Status</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="Breakfast">
                                <label for="location">Location</label>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('tables.index') }}" class="btn btn-lg btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary btn-lg">Store</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
