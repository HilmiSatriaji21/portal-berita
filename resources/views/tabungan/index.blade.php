@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('massage'))
                        <div class="alert alert-dark" role="alert">
                            {{ session('massage') }}
                        </div>
                    @endif
                <div class="card">
                    <div class="card-header"><center><b>Data Tabungan</b></center></div>

                    <div class="card-body">
                        <a href="{{route("tabungan.create")}}" class="btn btn-outline-danger float-right">
                            Tambah Data (+)
                        </a>
                    </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Kelas</th>
                                        <th>Jumlah Uang Tabungan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($tabungan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->siswa->nama }}</td>
                                            <td>{{ $data->siswa->kelas }}</td>
                                            <td>{{ $data->jumlah_uang }}</td>
                                            <td>
                                                <form action="{{route('tabungan.destroy',$data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <a class="btn btn-info" href=" {{ route('tabungan.show', $data->id) }} ">Show</a>
                                                <a class="btn btn-warning" href=" {{ route('tabungan.edit', $data->id) }} ">Edit</a>
                                                <button type="submit" class="btn btn-danger" >Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
