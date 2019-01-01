@extends('layouts.app')

@section('content')
<h4>Berita Baru</h4>
<form action="{{ route('berita.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('judul') ? 'has-error' : '' }}">
        <label for="judul" class="control-label">Judul</label>
        <input type="text" class="form-control" name="judul" placeholder="Judul">
        @if ($errors->has('judul'))
            <span class="help-block">{{ $errors->first('judul') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('kategori') ? 'has-error' : '' }}">
        <label for="kategori" class="control-label">Kategori</label>
        <div class="checkbox">
            <label><input type="checkbox" class="form-control" name="kategori" value="Olahraga">Olahraga</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" class="form-control" name="kategori" value="Teknologi">Teknologi</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" class="form-control" name="kategori" value="Otomotif">Otomotif</label>
        </div>
        
        @if ($errors->has('kategori'))
            <span class="help-block">{{ $errors->first('kategori') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
        <label for="deskripsi" class="control-label">Deskripsi</label>
        <textarea name="deskripsi" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('deskripsi'))
            <span class="help-block">{{ $errors->first('deskripsi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('berita.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection