@extends('admin.layout')
@section('content')
    <div class="container" style="margin-top: 7%">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="float-end mb-2">
                    <a href="{{ route('reservations.create') }}" class="btn btn-primary">New Reservation</a>
                </div>
                <table class="table table table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Reservation Date</th>
                            <th scope="col">Table</th>
                            <th scope="col">Guests</th>
                        </tr>
                    </thead>
                    <tbody><?php $count = 1; ?>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $reservation->first_name . ' ' . $reservation->last_name }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>{{ $reservation->res_date }}</td>
                                <td>{{ $reservation->table_id }}</td>
                                <td>{{ $reservation->guest_number }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
