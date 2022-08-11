@extends('admin.layout')
@section('content')
    <div class="container" style="margin-top: 7%">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="float-end mb-2">
                    <a href="{{ route('tables.create') }}" class="btn btn-primary">New Table</a>
                </div>
                <table class="table table table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Guest Number</th>
                            <th scope="col">Status</th>
                            <th scope="col">Location</th>
                        </tr>
                    </thead>
                    <tbody><?php $count = 0; ?>
                        @foreach ($tables as $table)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $table->name }}</td>
                                <td>{{ $table->guest_number }}</td>
                                <td>{{ $table->status }}</td>
                                <td>{{ $table->location }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
