@extends('layouts.main')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>Edit Pelanggan</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('pelanggan.update', $pelanggans->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="name_pelanggan" name="name_pelanggan" value="{{ $pelanggans->name_pelanggan }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $pelanggans->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="telp" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telp" name="telp" value="{{ $pelanggans->telp }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
