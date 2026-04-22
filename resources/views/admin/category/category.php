<h1>Data Kategori</h1>

<a href="{{ route('category.create') }}">Tambah</a>

@foreach($categories as $cat)
    <p>
        {{ $cat->name }}

        <a href="{{ route('category.edit', $cat->id) }}">Edit</a>

        <form action="{{ route('category.destroy', $cat->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Hapus</button>
        </form>
    </p>
@endforeach
