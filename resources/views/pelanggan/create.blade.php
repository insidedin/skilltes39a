@extends('layouts.main')

@section('title', 'Tambah Pelanggan')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Pelanggan</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="name_pelanggan" name="name_pelanggan" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="telp" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telp" name="telp" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
