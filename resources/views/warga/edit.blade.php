@extends('layouts.master')

@section('content')
    
<div class="container mt-4">
    <h1 class="mb-4">Edit Warga</h1>
    
    <form action="/warga/{{$warga->id}}" method="POST">
     @method('put')
        @csrf
        <div class="row">
            <div class="col-md-7 mb-3">
                <label for="nama">Nama</label>
                <input class="form-control" type="text" id="nama" name="nama" value="{{$warga->nama}}"> 
            </div>
            <div class="col-md-7 mb-3">
                <label for="nik">NIK</label>
                <input class="form-control" type="text" id="nik" name="nik" value="{{$warga->nik}}"> 
            </div>
            <div class="col-md-7 mb-4">
                <label for="no_kk">NO KK</label>
                <input class="form-control" type="text" id="no_kk" name="no_kk" value="{{$warga->no_kk}}">
            </div>
            <div class="col-md-7 mb-4">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin"> 
                    <option>-- Pilih Jenis Kelamin --</option>
                    <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                    <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="col-md-7 mb-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" value="Alamat" cols="10" rows="8">{{$warga->alamat}}</textarea>
            </div>
        </div>
        <a class="btn btn-dark me-4" href="/warga">Kembali</a>
        <input class="btn btn-outline-success" type="submit" name="submit" value="Perbarui">
    </form>
</div>
@endsection