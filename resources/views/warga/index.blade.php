@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Warga') }}</div>

                <div class="card-body">
                    <h1>Halaman Warga</h1>
                    <hr>
                    <a class="btn btn-primary mt-4 mb-4" href="/warga/create">Tambah Warga</a>
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>No KK</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat Rumah</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($warga as $w)
                            <tr>
                                <td>{{ $w->id }}</td>
                                <td>{{ $w->nama }}</td>
                                <td>{{ $w->nik }}</td>
                                <td>{{ $w->no_kk }}</td>
                                <td>{{ $w->jenis_kelamin }}</td>
                                <td>{{ $w->alamat }}</td>
                                <td>
                                    <div class="d-flex">
                                    <a class="btn btn-warning me-2" href="/warga/{{ $w->id }}/edit">Edit</a>
                                    <form class="" action="/warga/{{ $w->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="Hapus">
                                    </form>
                                </td>
                            </div>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
