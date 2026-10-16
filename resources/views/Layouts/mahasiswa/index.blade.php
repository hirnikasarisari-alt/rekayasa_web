@extends('Layouts.main')

@section('title', '- Data Mahasiswa')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet">

      
<div class="container mt-5">
    <h1 class="mb-4">Daftar Mahasiswa</h1>

    {{--Notifikasi --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    {{--tabel daftar mahasiswa--}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->jk }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->no_telp }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs->nim) }}"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>

                       <form action="{{ route('mahasiswa.hapus', $mhs->nim) }}"
                         method="POST"
                        style="display:inline;">
                         @csrf
                        @method('DELETE')

                       <button type="submit"
                         class="btn btn-danger btn-sm"
                         onclick="return confirm('Yakin ingin menghapus data ini?')">
                         Hapus
                      </button>
                      </form>

                 
                   </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('mahasiswa.create') }}"
         class="btn btn-success mb-3">
         + Tambah Data Mahasiswa
        </a>

        <form action="{{ route('mahasiswa.index') }}" method="GET" class="mb-3">
                    <div class="input-group">
                        <input
                         type="text"
                         name="keyword"
                         class="form-control"
                         placeholder="Cari berdasarkan NIM atau alamat..."
                         value="{{ $keyword ?? '' }}">

                        <button type="submit" class="btn btn-primary">
                         Cari
                        </button>

                        <a href="{{ route('mahasiswa.index') }}"
                         class="btn btn-secondary">
                         Reset
                        </a>
                    </div>
        </form>
    </div>
</div>
@endsection