@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Jurusan</div>

                    <div class="card-body">
                        <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Add Data</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kaprog</th>
                                    <th scope="col">Nama_jurusan</th>
                                    <th scope="col">Sampul</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($jurusan as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->kaprog }}</td>
                                        <td>{{ $data->nama_jurusan }}</td>
                                        
                                        <td>
                                            <img src="{{ asset('/images/jurusan/' . $data->sampul) }}" width="100">
                                        </td>
                                        <form action="{{ route('jurusan.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('jurusan.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('jurusan.show', $data->id) }}"
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
