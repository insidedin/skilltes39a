@extends('layouts.main')

@section('title', 'Edit Admin')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>Edit Admin</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $admin->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection