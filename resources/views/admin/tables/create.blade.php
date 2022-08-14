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
                                @error('name')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="guest_number" name="guest_number"
                                    placeholder="6">
                                <label for="guest_number">Guest Number</label>
                                @error('guest_number')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="status" name="status" aria-label="Select Status">
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                                <label for="status">Select Status</label>
                                @error('status')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="location" name="location" aria-label="Select Location">
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                        <option value="{{ $location->value }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                                <label for="location">Select Location</label>
                                @error('location')
                                    <div class="alert alert-danger my-1">{{ $message }}</div>
                                @enderror
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
