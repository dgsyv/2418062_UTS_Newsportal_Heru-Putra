{{-- resources/views/admin/news/edit.blade.php --}}
@extends('Layouts.admin.master')

@section('title', 'Edit Berita')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Berita: {{ $news->title }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}"
                            {{ $news->category_id == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ringkasan</label>
                <textarea name="excerpt" class="form-control">{{ old('excerpt', $news->excerpt) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea name="content" class="form-control" rows="10" required>{{ old('content', $news->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                @if($news->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$news->image) }}" width="200">
                    </div>
                @endif
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
