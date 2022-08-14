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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody><?php $count = 1; ?>
                        @foreach ($tables as $table)
                            <tr>
                                <th scope="row">{{ $count++ }}</th>
                                <td>{{ $table->name }}</td>
                                <td>{{ $table->guest_number }}</td>
                                <td>{{ $table->status->name }}</td>
                                <td>{{ $table->location->name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-success me-2">Edit</a>
                                        <form action="{{ route('tables.destroy', $table->id) }}" method="post"
                                            onsubmit="return confirm('Are you sure you want to delete this Table?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
