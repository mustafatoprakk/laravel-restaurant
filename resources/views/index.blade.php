@extends('layout')
@section('content')
    <div class="container-fluid">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="storage/carousel/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="storage/carousel/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="storage/carousel/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mb-5" style="margin-top: 10%">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        <img src="storage/carousel/img5.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-6">
                        <p class="fs-3 text-danger fw-bolder">Welcome</p>
                        <p class="font-monospace">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                            totam, iste quam minima
                            quae
                            ipsum inventore ducimus commodi a enim, fuga debitis impedit, illum laboriosam earum itaque
                            ipsa
                            natus?</p>
                        <a href="" class="btn btn-danger">Read More</a>
                    </div>
                </div>
                <div class="row" style="margin-top: 15%">
                    <div class="col-md-6">
                        <p class="fs-3 text-danger fw-bolder">Welcome</p>
                        <p class="font-monospace">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
                            totam, iste quam minima
                            quae
                            ipsum inventore ducimus commodi a enim, fuga debitis impedit, illum laboriosam earum itaque
                            ipsa
                            natus?</p>
                        <a href="" class="btn btn-danger">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <img src="storage/carousel/img6.jpg" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mb-5" style="margin-top: 10%">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="text-center fs-5 fw-bold">Our Menu</div>
                <p class="text-center fs-3 fw-bold text-danger">TODAY'S SPECIALTY</p>
                <div class="row">
                    @foreach ($specials->menus as $menu)
                        <div class="col-md-3">
                            <a href="{{ route('customer.categories.show', $menu->id) }}"
                                class="text-decoration-none text-dark">
                                <div class="card shadow mb-5 bg-body rounded">
                                    <img src="{{ Storage::url($menu->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="float-start">{{ $menu->name }}</h5>
                                        <h6 class="float-end">${{ $menu->price }}</h6>
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
