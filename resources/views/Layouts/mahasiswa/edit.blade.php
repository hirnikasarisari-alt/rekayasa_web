
@extends('Layouts.main')

@section('title', '- Edit Data Mahasiswa')

@section('content')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet">

<div class="container mt-5">
    <h2>Edit Data Mahasiswa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
        @csrf
        @method('PUT')

        <label>NIM</label>
        <input type="text" name="nim" class="form-control"
         value="{{ old('nim', $mahasiswa->nim) }}" required>
        <br><br>

        <label>Nama</label>
        <input type="text" name="nama" class="form-control"
            value="{{ old('nama', $mahasiswa->nama) }}" required>
        <br><br>

        <label>Jenis Kelamin</label>
        <select name="jk" required>
            <option value="L" {{ old('jk', $mahasiswa->jk) == 'L' ? 'selected' : '' }}>
                Laki-laki
            </option>
            <option value="P" {{ old('jk', $mahasiswa->jk) == 'P' ? 'selected' : '' }}>
                Perempuan
            </option>
        </select>
        <br><br>

        <label>Program Studi</label>
        <input type="text" name="prodi" class="form-control"
            value="{{ old('prodi', $mahasiswa->prodi) }}" required>
        <br><br>

        <label>Nomor Telepon</label>
        <input type="text" name="no_telp" class="form-control"
            value="{{ old('no_telp', $mahasiswa->no_telp) }}" required>
        <br><br>

        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
        <br><br>

        <button type="submit" class="btn btn-primary">
            Simpan Perubahan
        </button>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
