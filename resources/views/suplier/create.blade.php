@extends('layouts.main')

@section('title', 'Tambah Suplier')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Suplier</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('suplier.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name_suplier" class="form-label">Nama Suplier</label>
                    <input type="text" class="form-control" id="name_suplier" name="name_suplier" required>
                </div>
                <div class="mb-3">
                    <label for="telp" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telp" name="telp" required>
                </div>
                <div class="mb-3">
                    <label for="tgl_terdaftar" class="form-label">Tanggal Terdaftar</label>
                    <input type="date" class="form-control" id="tgl_terdaftar" name="tgl_terdaftar" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
