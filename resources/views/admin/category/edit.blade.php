@extends('Layouts.admin.master')

@section('title', 'Edit Kategori')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Edit Kategori</h3>
    </div>

    <div class="card-body">

        {{-- ERROR VALIDASI --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Kategori</label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ $category->name }}"
                    required
                >
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>
</div>

@endsection
