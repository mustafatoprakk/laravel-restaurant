@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                <div class="card-body">
                    <form action="{{ route('reservations.store') }}" method="post">
                        @csrf
                        <div class="text-center pb-3">
                            <p class="fs-3 font-monospace">Create Reservation</p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                placeholder="Breakfast">
                            <label for="first_name">First Name</label>
                            @error('first_name')
                                <div class="alert alert-danger my-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                placeholder="Breakfast">
                            <label for="last_name">Last Name</label>
                            @error('last_name')
                                <div class="alert alert-danger my-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Breakfast">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="alert alert-danger my-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Breakfast">
                            <label for="phone">Phone</label>
                            @error('phone')
                                <div class="alert alert-danger my-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="datetime-local" class="form-control" id="res_date" name="res_date"
                                placeholder="12.04.1990" min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                max="{{ $max_date->format('Y-m-d\TH:i:s') }}">
                            <label for="res_date">Reservation Date</label>
                            @error('res_date')
                                <div class="alert alert-danger my-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="table_id" name="table_id" aria-label="Select Table">
                                @foreach ($tables as $table)
                                    <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }}
                                        Guests)
                                    </option>
                                @endforeach
                            </select>
                            <label for="table_id">Table Number</label>
                            @error('table_id')
                                <div class="alert alert-danger my-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="guest_number" name="guest_number"
                                placeholder="Breakfast">
                            <label for="guest_number">Guest Number</label>
                            @error('guest_number')
                                <div class="alert alert-danger my-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="float-end">
                            <a href="{{ route('reservations.index') }}" class="btn btn-lg btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary btn-lg">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
