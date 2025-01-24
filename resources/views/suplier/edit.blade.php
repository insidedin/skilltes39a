@extends('layouts.main')

@section('title', 'Edit Suplier')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>Edit Suplier</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('suplier.update', $supliers->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name_suplier" class="form-label">Nama Suplier</label>
                    <input type="text" class="form-control" id="name_suplier" name="name_suplier" value="{{ $supliers->name_suplier }}" required>
                </div>
                <div class="mb-3">
                    <label for="telp" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telp" name="telp" value="{{ $supliers->telp }}" required>
                </div>
                <div class="mb-3">
                    <label for="tgl_terdaftar" class="form-label">Tanggal Terdaftar</label>
                    <input type="date" class="form-control" id="tgl_terdaftar" name="tgl_terdaftar" value="{{ $supliers->tgl_terdaftar }}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="Aktif" {{ $supliers->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Tidak Aktif" {{ $supliers->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
