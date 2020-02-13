@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
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
