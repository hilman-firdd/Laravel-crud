@extends('layout.main')

@section('title', 'Halaman Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table table-dark table-striped">
                <thead>
                   <tr> 
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nrp</th>
                        <th scope="col">email<th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td colspan="2">
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection