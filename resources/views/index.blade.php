@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row tm-welcome-row">
            <div class="col-12">
                <div class="tm-welcome-parallax tm-center-child" data-parallax="scroll" data-image-src="img/img3.jpg">
                    <div class="tm-bg-black-transparent tm-parallax-overlay">
                        <h2>Our Restaurant</h2>
                        <p>this is our restaurant</p>
                    </div>
                </div>
            </div>
        </div>


        <section class="row tm-pt-4">
            <div class="col-12 tm-page-cols-container">
                <div class="tm-page-col-left">
                    <ul class="tabs clearfix filters-button-group">
                        <li>
                            <a href="#" class="active" data-filter="*">
                                <div class="tm-tab-icon"></div>
                                All Types
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-filter=".category-1">
                                <div class="tm-tab-icon"></div>
                                First Category
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-filter=".category-2">
                                <div class="tm-tab-icon"></div>
                                Second Type
                            </a>
                        </li>
                        <li>
                            <a href="#" class="" data-filter=".category-3">
                                <div class="tm-tab-icon"></div>
                                Third Category
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tm-page-col-right">
                    <div class="tm-gallery" id="tmGallery">
                        <div class="tm-gallery-item category-1">
                            <figure class="effect-bubba">
                                <img src="img/item-5.jpeg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="" class="btn btn-success">View more</a>
                                    <a
                                        class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-4 ">asdadsa</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-2">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-02.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#" class="btn btn-success">View more</a>
                                    <div class="position-absolute bottom-0 end-0 me-4 pe-1 pb-1 mb-4">76$</div>
                                    <button
                                        class="btn btn-primary position-absolute bottom-0 start-0 mb-4 ms-4">asdadsa</button>
                                        
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-1">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-03.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-3">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-04.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-2">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-05.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-3">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-06.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-3">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-07.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-1">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-08.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-2">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-09.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-3">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-10.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-2">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-11.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tm-gallery-item category-1">
                            <figure class="effect-bubba">
                                <img src="img/gallery/gallery-item-12.jpg" alt="Gallery item" class="img-fluid" />
                                <figcaption>
                                    <h2>Fresh <span>Bubba</span></h2>
                                    <p>Bubba likes to appear out of thin air.</p>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
