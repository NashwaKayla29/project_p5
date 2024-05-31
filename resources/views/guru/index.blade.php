@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data guru</div>

                    <div class="card-body">
                        <a href="{{ route('guru.create') }}" class="btn btn-primary">Add Data</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama_guru</th>
                                    <th scope="col">telepon</th>
                                    <th scope="col">email</th>
                                    <th scope="col">nama_mapel</th>
                                    <th scope="col">sampul</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($guru as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_guru }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->mapel->mapel }}</td>
                                        
                                        <td>
                                            <img src="{{ asset('/images/guru/' . $data->sampul) }}" width="100">
                                        </td>
                                        <form action="{{ route('guru.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('guru.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('guru.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger">Delete</a></button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
