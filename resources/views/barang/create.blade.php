@extends('layouts.main')

@section('title', 'Tambah Barang')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Barang</strong>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="suplier_id" class="form-label">Suplier</label>
                        <select name="suplier_id" class="form-control" required>
                            <option value="">-- Pilih Suplier --</option>
                            @foreach ($supliers as $suplier)
                                <option value="{{ $suplier->id }}">{{ $suplier->name_suplier }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok_awal" class="form-label">Stok Awal</label>
                        <input type="number" name="stok_awal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Barang</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('barang.barang') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
