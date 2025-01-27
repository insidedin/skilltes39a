@extends('layouts.main')

@section('title', 'Daftar Pelanggan')

@section('content')
<div class="container-fluid">
    <h4 class="mb-3">Daftar Pelanggan</h4>
    <nav aria-label="breadcrumb" class="mb-1">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Daftar Pelanggan</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <div class="mt-3 card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="pt-1 w-100">
                            <strong>Daftar Pelanggan</strong>
                        </div>
                        <div class="w-100 text-end">
                            <a href="{{ route('pelanggan.pelanggan') }}" class="btn btn-outline-primary btn-sm">
                                Refresh Data <i class="bi bi-arrow-clockwise"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" id="flash-message">
                            {{ Session::get('message') }}
                        </div>
                        <script>
                            setTimeout(function () {
                                document.getElementById('flash-message').style.display = 'none';
                            }, {{ session('timeout', 5000) }});
                        </script>
                    @endif

                    <div class="mx-3 my-4 row">
                        <div class="col-6">
                            <a href="{{ route('pelanggan.create') }}" class="btn btn-primary btn-sm">Tambah Data <i class="fa-solid fa-plus"></i></a>
                        </div>
                        <div class="col-6">
                            <form action="{{ route('pelanggan.pelanggan') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Cari Suplier ..." value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telp</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($pelanggans as $pelanggan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $suplier->name_pelanggan }}</td>
                                    <td>{{ $suplier->email }}</td>
                                    <td>{{ $suplier->telp}}</td>
                                    <td>{{ $suplier->status }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus Data ???');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data Pelanggan</td>
                                </tr>
                            @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
