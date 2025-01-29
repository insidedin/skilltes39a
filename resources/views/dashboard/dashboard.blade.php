@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<style>
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        background-color: #F0EBEB;
    }
    .card:hover {
        transform: translateY(-10px);
    }
    .card-body {
        padding: 20px;
        text-align: center;
    }
    .card-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .card-text {
        font-size: 1.5rem;
        color: #ffffff;
    }
    .btn_info{
        background-color: rgb(228, 192, 192);
        color: #fff;
        border-radius: 5px;
        padding: 8px 16px;
        transition: background-color 0.3s ease;
    }
    .btn_info:hover {
        background-color: #FFFFFF;
        color: #000000;
    }
    .custom-icon-size {
        font-size: 30px; /* Adjust the size as needed */
    }
</style>

    <div class="container-fluid">
        <h4 class="mb-3">Dashboard</h4>
        <nav aria-label="breadcrumb" class="mb-1">
            <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card" style="background-color: rgb(228, 192, 192)">
                    <div class="card-body">
                        <h6 class="rounded p-2 text-dark" style="background-color: #ffff">Total Suplier</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="bi bi-person-lines-fill custom-icon-size text-light"></i>
                            <h3 class="mx-2 text-light">{{ $totalSuplier }}</h3>
                        </div>
                        <div class="text-end mt-2">
                            <a href="{{ url('/suplier') }}" class="btn btn_info">Lihat Data <i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card" style="background-color: rgb(228, 192, 192)">
                    <div class="card-body">
                        <h6 class="rounded p-2 text-dark" style="background-color: #ffff">Total Pelanggan</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="bi bi-people custom-icon-size text-light"></i>
                            <h3 class="mx-2 text-light">{{ $totalPelanggan }}</h3>
                        </div>
                        <div class="text-end mt-2">
                            <a href="{{ url('/pelanggan') }}" class="btn btn_info">Lihat Data <i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card" style="background-color: rgb(228, 192, 192)">
                    <div class="card-body">
                        <h6 class="rounded p-2 text-dark" style="background-color: #ffff">Total Barang</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="bi bi-bag-check custom-icon-size text-light"></i>
                            <h3 class="mx-2 text-light">{{ $totalBarang }}</h3>
                        </div>
                        <div class="text-end mt-2">
                            <a href="{{ url('/barang') }}" class="btn btn_info">Lihat Data <i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mb-4">
                <div class="card" style="background-color: rgb(228, 192, 192)">
                    <div class="card-body">
                        <h6 class="rounded p-2 text-dark" style="background-color: #ffff">Total Pendapatan</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="bi bi-people-fill custom-icon-size text-light"></i>
                            <h3 class="mx-2 text-light"></h3>
                            {{-- <h3 class="mx-2 text-light">{{ 'Rp ' . number_format($totalPendapatam, 0, ',', '.') }}</h3> --}}
                        </div>
                        <div class="text-end mt-2">
                            <a href="#" class="btn btn_info">Lihat Data <i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
