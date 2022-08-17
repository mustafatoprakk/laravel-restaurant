@extends('layout')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-md-3">
                            <a href="{{ route('customer.categories.show', $category->id) }}"
                                class="text-decoration-none text-dark">
                                <div class="card shadow mb-5 bg-body rounded">
                                    <img src="{{ Storage::url($category->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $category->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
