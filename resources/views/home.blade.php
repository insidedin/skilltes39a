@extends('layouts.app')

@section('judul','Digital Stock App')

@section('konten')

    {{-- ini konten home --}}
    <section class="home-section" id="home">
        <div class="background">
            <h2 class="text-uppercase">Real Designs <br> by Real Artists <br> for Real People</h2>
            <p>EDITOR'S PICKS <br>
            Discover the best designs hand-picked from your favorite creators.
                <br>Browse, design, and sell what you love.</p>
            <div>
                <a href="#product" class="btn btn-primary">Shop Now &raquo;</a>
            </div>
        </div>
    </section>

    {{-- ini konten product --}}
    <section class="product-section" id="product">
        <div class="container">
            <br><br><br><br>
            <h2 class="judul">Community Favourites</h2>
            <p class="subjudul">Explore & Shop | Create & Sell</p>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/swag.jpeg') }}" class="card-img-top" alt="Shirt 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Together With The End</h5>
                            <p class="card-price">Rp25.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/swag.jpeg') }}" class="card-img-top" alt="Shirt 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Apron World Grid</h5>
                            <p class="card-price">€22.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/swag.jpeg') }}"class="card-img-top" alt="Shirt 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">God's Bungie</h5>
                            <p class="card-price">€23.50</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('assets/images/swag.jpeg') }}" class="card-img-top" alt="Shirt 4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Inside Squad</h5>
                            <p class="card-price">€25.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ini konten explore --}}
    <section class="explore-section" id="explore">
        <div class="container">
            <h1 class="text-center">MAKE BETTER THINGS. <br>
            NO RISK. NO WASTE</h1>
        </div>
    </section>

    {{-- ini konten contact --}}
    <section class="contact-section" id="contact">

    </section>
@endsection