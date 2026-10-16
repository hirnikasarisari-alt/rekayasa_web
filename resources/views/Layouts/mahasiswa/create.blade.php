@extends('Layouts.main')

@section('title', '- Tambah Data Mahasiswa')

@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet">
      
<div class="container mt-5">
    <h2>Tambah Data Mahasiswa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control"
                   value="{{ old('nim') }}" required>
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control"
                   value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control" required>
                <option value="">Pilih</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Program Studi</label>
            <input type="text" name="prodi" class="form-control"
                   value="{{ old('prodi') }}" required>
        </div>

        <div class="mb-3">
            <label>Nomor Telepon</label>
            <input type="text" name="no_telp" class="form-control"
                   value="{{ old('no_telp') }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"
                      required>{{ old('alamat') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan Data</button>
        <a href="{{ route('mahasiswa.index') }}"
           class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection