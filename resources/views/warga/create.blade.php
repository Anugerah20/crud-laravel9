@extends('layouts.master')

@section('content')

<div class="container mt-4">  
    <h1 class="mb-4">Tambah Warga</h1>
    
    <form action="/warga/store" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-7 mb-3">
                <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" placeholder="Isi Nama" required> 
            </div>
            <div class="col-md-7 mb-3">
                <label for="nik">NIK</label>
                <input class="form-control" type="text" name="nik" id="nik" placeholder="Isi NIK" required>
            </div>
            <div class="col-md-7 mb-3">
                <label for="no_kk">NO KK</label>
                <input class="form-control" type="text" name="no_kk" id="no_kk" placeholder="Isi No KK" required>
            </div>
            <div class="col-md-7 mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required> 
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="col-md-7 mb-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Alamat" cols="10" rows="8"></textarea>
            </div>
        </div> 
       
        <a class="btn btn-dark me-4" href="/warga">Kembali</a>
        <input class="btn btn-outline-success" type="submit" name="submit" value="Simpan">
    </form>
</div>  
@endsection