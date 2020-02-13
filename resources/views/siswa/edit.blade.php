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

                    <form action="{{route('siswa.update',$siswa->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Nama Siswa</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama" value="{{$siswa->nama}}" required>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Kelas</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="kelas" value="{{$siswa->kelas}}" required>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
                        <button class="btn btn-outline-warning" type="reset">Reset</button>
                        <button class="btn btn-outline-danger" type="" href="{{route("siswa.index")}}">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
