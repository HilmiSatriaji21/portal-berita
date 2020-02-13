@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Siswa</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}
                        <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Nama Siswa</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama" value="{{$siswa->nama}}" readonly>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Kelas</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="kelas" value="{{$siswa->kelas}}" readonly>
                            </div>
                        </div>
                        <a href="{{route("siswa.index")}}" class="btn btn-outline-dark float-right">
                                Back
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
