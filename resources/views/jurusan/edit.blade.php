@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Jurusan</div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Kaprog</label>
                                <input type="text" class="form-control" name="kaprog"
                                    value="{{ $jurusan->kaprog }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan"
                                    value="{{ $jurusan->nama_jurusan }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('jurusan')}}" class="btn btn-primary">Back</a
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
