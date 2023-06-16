@extends('dashboard.header')

@section('title', 'Admin')

@section('main-content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Category
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID                   : </b>{{$kategori->id}}</li>
                    <li class="list-group-item"><b>Nama Kategori        : </b>{{$kategori->nama_kategori}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('kategori.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection