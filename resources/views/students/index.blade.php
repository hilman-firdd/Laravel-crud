@extends('layout.main')

@section('title', 'Halaman Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
            
            @if( session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            
            <ol class="list-group list-group-numbered">
                @foreach ($students as $st)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">{{$st->nama}}</div>
                  </div>
                  <a href="/students/{{ $st->id }}" class="badge bg-primary rounded-pill">detail</a>
                </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
@endsection