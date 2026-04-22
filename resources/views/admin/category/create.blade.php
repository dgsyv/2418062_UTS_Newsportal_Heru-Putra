@extends('Layouts.admin.master')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Kategori</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Kategori</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan kategori">
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
