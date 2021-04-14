@extends('layout.main')

@section('title', 'Halaman Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
                <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value={{ old('nama') }}>  
                        @error('nama')
                                <div class="valid-feedback" style="display:block">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nrp" class="form-label">nrp</label>
                        <input type="text" class="form-control" name="nrp" id="nrp" value={{ old('nrp') }}>  
                        @error('nrp')
                            <div class="valid-feedback" style="display:block">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" name="email" id="email" value={{ old('email') }}>  
                        @error('email')
                            <div class="valid-feedback" style="display:block">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class="form-label">jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" value={{ old('jurusan') }}>  
                        @error('jurusan')
                            <div class="valid-feedback" style="display:block">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>            
            </div>
    </div>
</div>
@endsection