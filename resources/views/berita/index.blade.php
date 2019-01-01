@extends('layouts.app')

@section('content')
<div align="center">
    <h3>BERITA ALJUNI.COM</h3>
</div>

    <a href="{{ route('berita.create') }}" class="btn btn-info btn-danger btn-sm">Berita Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($beritas as $berita)
                <tr>
                    <td>{{ $berita->id }}</td>
                    <td><a href="{{ route('berita.show', $berita->id) }}">{{ $berita->judul }}</a></td>
                    <td><a href="{{ route('berita.show', $berita->id) }}">{{ $berita->kategori }}</a></td>
                    <td><a href="{{ route('berita.show', $berita->id) }}">{{ $berita->deskripsi }}</a></td>
                    <td>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection