@extends('layouts.main')

@section('title', 'Daftar Suplier')

@section('content')
<div class="container-fluid">
    <h4 class="mb-3">Daftar Suplier</h4>
    <nav aria-label="breadcrumb" class="mb-1">
        <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Daftar Suplier</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <div class="mt-3 card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="pt-1 w-100">
                            <strong>Daftar Suplier</strong>
                        </div>
                        <div class="w-100 text-end">
                            <a href="{{url('/suplier')}}" class="btn btn-outline-primary btn-sm">
                                Refresh Data <i class="bi bi-arrow-clockwise"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" id="flash-message">
                            {{Session::get('message')}}
                        </div>
                        <script>
                            setTimeout(function (){
                                document.getElementById('flash-message').style.display='none';
                            }, {{ session('timeout', 5000) }});
                        </script>
                    @endif

                    <div class="mx-3 my-4 row">
                        <div class="col-6 bg-">
                            <a href="{{ route('suplier.create') }}" class="btn btn-primary btn-sm">Tambah Data <i class="fa-solid fa-plus"></i></a>
                        </div>
                        <div class="col-6">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Cari Suplier ...">
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
                                <th>Telp</th>
                                <th>Terdaftar</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->terdaftar }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus Data ???');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection