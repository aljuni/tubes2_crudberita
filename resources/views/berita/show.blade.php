@extends('layouts.app')

@section('content')
<h4>{{ $berita->judul }}</h4>
<h4>{{ $berita->kategori }}</h4>
<p>{{ $berita->deskripsi }}</p>
<a href="{{ route('berita.index') }}" class="btn btn-default">Kembali</a>
@endsection