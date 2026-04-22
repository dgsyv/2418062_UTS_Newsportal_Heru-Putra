@extends('Layouts.admin.master')

@section('title', 'Data Kategori')

@section('content')

<div class="card-header">
    <h3 class="card-title">Data Kategori</h3>

    <a href="{{ route('admin.category.create') }}"
       class="btn btn-primary btn-sm float-end">
        + Tambah Kategori
    </a>
</div>

    <div class="card-body">

        {{-- 🔥 NOTIF SUCCESS + AUTO HILANG --}}
        @if(session('success'))
            <div class="alert alert-success" id="notif">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(() => {
                    document.getElementById('notif').style.display = 'none';
                }, 3000);
            </script>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="50">No</th>
                    <th>Nama Kategori</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $i => $cat)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>
                        <a href="{{ route('admin.category.edit', $cat->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.category.destroy', $cat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
