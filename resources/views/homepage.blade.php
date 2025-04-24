@extends('layout.template')

@section('title', 'Homepage')

@section('content')

<!-- Notifikasi sukses -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>    
@endif

<!-- Judul section -->
<h1>Popular Movie</h1>

<!-- Daftar Movie -->
<div class="row">
    @foreach ($movies as $movie)
    <div class="col-lg-6">
        <div class="card mb-3 shadow-sm" style="max-width: 540px;">
            <div class="row g-0">
                <!-- Gambar sampul -->
                <div class="col-md-4">
                    <img src="/images/{{ $movie['foto_sampul'] }}" 
                         class="img-fluid rounded-start" 
                         alt="{{ $movie['judul'] }}">
                </div>
                
                <!-- Detail movie -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['judul'] }}</h5>
                        <p class="card-text text-truncate" style="max-height: 4.5em; overflow: hidden;">
                            {{ $movie['sinopsis'] }}
                        </p>
                        <a href="/movie/{{ $movie['id'] }}" class="btn btn-success">
                            Lihat Selanjutnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-3">
    {{ $movies->links() }}
</div>

@endsection
