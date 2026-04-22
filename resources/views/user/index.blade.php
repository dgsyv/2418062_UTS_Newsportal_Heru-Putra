@extends('layouts.user.master')

@section('content')

<div class="row">

    <div class="col-lg-8">

        @if($news->count() > 0)
            @php $first = $news->shift(); @endphp

            <!-- Featured -->
            <div class="card mb-4">
                @if($first->image)
                    <a href="{{ route('news.show', $first->slug) }}">
                        <img class="card-img-top" src="{{ asset('storage/'.$first->image) }}">
                    </a>
                @endif

                <div class="card-body">
                    <div class="small text-muted">{{ $first->created_at->format('F d, Y') }}</div>
                    <h2 class="card-title">{{ $first->title }}</h2>
                    <p class="card-text">{{ $first->excerpt ?? Str::limit($first->content, 150) }}</p>
                    <a class="btn btn-primary" href="{{ route('news.show', $first->slug) }}">Read more →</a>
                </div>
            </div>

            <!-- List -->
            <div class="row">
                @foreach($news->chunk(2) as $chunk)
                    @foreach($chunk as $item)
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                @if($item->image)
                                    <a href="{{ route('news.show', $item->slug) }}">
                                        <img class="card-img-top" src="{{ asset('storage/'.$item->image) }}">
                                    </a>
                                @endif

                                <div class="card-body">
                                    <div class="small text-muted">{{ $item->created_at->format('F d, Y') }}</div>
                                    <h2 class="card-title h4">{{ $item->title }}</h2>
                                    <p class="card-text">{{ $item->excerpt ?? Str::limit($item->content, 100) }}</p>
                                    <a class="btn btn-primary" href="{{ route('news.show', $item->slug) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <!-- Pagination -->
            {{ $news->links() }}

        @else
            <p>Tidak ada berita.</p>
        @endif

    </div>

    <div class="col-lg-4">

        <!-- Search -->
        <div class="card mb-4">
            <div class="card-header">Search</div>
            <div class="card-body">
                <form>
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search..." />
                        <button class="btn btn-primary">Go!</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <div class="row">
                    @foreach($categories as $cat)
                        <div class="col-sm-6">
                            <a href="{{ url('/?category='.$cat->id) }}">
                                {{ $cat->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
