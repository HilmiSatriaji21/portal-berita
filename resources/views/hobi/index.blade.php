@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             @if (session('massage'))
                        <div class="alert alert-dark" role="alert">
                            {{ session('massage') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header"><center><b>Data Hobi Siswa</b></center></div>

                <div class="card-body">
                    <a href="{{route("hobi.create")}}" class="btn btn-outline-danger float-right">
                            Tambah Data (+)
                        </a>
                        <br><br>

                    <table class="table">
                        <thead>
                            <th>Jenis Hobi</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                                @foreach ($data as $item)
                            <tr>
                                <td>{{$item->hobi}}</td>
                                <td>
                                <form action="{{route('hobi.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a class=" btn btn-warning" href="{{route('hobi.edit',$item->id)}}">Edit</a>
                                <a class=" btn btn-info" href="{{route('hobi.show',$item->id)}}">Show</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
