@extends('admin.layout')
@section('content')

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <form action="{{ route('reservations.update', $reservation->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="text-center pb-3">
                                <p class="fs-3 font-monospace">Update Reservation</p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Breakfast" value="{{ $reservation->first_name }}">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Breakfast" value="{{ $reservation->last_name }}">
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Breakfast" value="{{ $reservation->email }}">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Breakfast" value="{{ $reservation->phone }}">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control" id="res_date" name="res_date"
                                    placeholder="Breakfast" value="{{ $reservation->res_date }}">
                                <label for="res_date">Reservation Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="table_id" name="table_id" aria-label="Select Table">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" @selected($reservation->table_id == $table->id)>{{ $table->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="table_id">Table Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="guest_number" name="guest_number"
                                    placeholder="Breakfast" value="{{ $reservation->guest_number }}">
                                <label for="guest_number">Guest Number</label>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('reservations.index') }}" class="btn btn-lg btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
