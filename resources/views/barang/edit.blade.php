@extends('layouts.main')

@section('title', 'Edit Barang')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <strong>Edit Data Barang</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="suplier_id" class="form-label">Suplier</label>
                        <select name="suplier_id" class="form-control" required>
                            @foreach ($supliers as $suplier)
                                <option value="{{ $suplier->id }}" {{ $barang->suplier_id == $suplier->id ? 'selected' : '' }}>
                                    {{ $suplier->name_suplier }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $barang->harga }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok_awal" class="form-label">Stok Awal</label>
                        <input type="number" name="stok_awal" class="form-control" value="{{ $barang->stok_awal }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Barang</label>
                        <input type="file" name="gambar" class="form-control">
                        <p>Gambar saat ini:</p>
                        @if ($barang->gambar)
                            <img src="{{ asset('storage/' . $barang->gambar) }}" width="100">
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('barang.barang') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
