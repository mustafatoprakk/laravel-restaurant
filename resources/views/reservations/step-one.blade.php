@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <div class="text-center py-3">
                            <p class="fs-3 font-monospace">Make Reservation</p>
                        </div>
                        <form action="{{ route('reservations.store.stepOne') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Breakfast" value="{{ $reservation->first_name ?? '' }}">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Breakfast" value="{{ $reservation->last_name ?? '' }}">
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Breakfast" value="{{ $reservation->email ?? '' }}">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Breakfast" value="{{ $reservation->phone ?? '' }}">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control" id="res_date" name="res_date"
                                    placeholder="Breakfast"
                                    value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                                    min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                    max="{{ $max_date->format('Y-m-d\TH:i:s') }}">
                                <label for="res_date">Reservation Date</label>
                                <span class="fw-light fs-6">Please choose the span between 07:00 - 22:00</span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="guest_number" name="guest_number"
                                    placeholder="Breakfast" value="{{ $reservation->guest_number ?? '' }}">
                                <label for="guest_number">Guest Number</label>
                            </div>
                            <div class="float-end">
                                <button type="submit" class="btn btn-primary btn-lg">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
