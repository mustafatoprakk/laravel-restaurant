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
                        <form action="{{ route('reservations.store.stepTwo') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <select class="form-select" id="table_id" name="table_id" aria-label="Select Table">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" @selected($reservation->table_id == $table->id)>{{ $table->name }}
                                            ({{ $table->guest_number }} Guests)
                                        </option>
                                    @endforeach
                                </select>
                                <label for="table_id">Table Number</label>
                            </div>
                            <div class="float-end mt-3">
                                <a href="{{ route('reservations.stepOne') }}" class="btn btn-success btn-lg">Back</a>
                                <button type="submit" class="btn btn-primary btn-lg">Make Reservation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
