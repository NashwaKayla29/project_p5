@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Eskul</div>
                    <div class="card-body">
                        <form action="{{ route('eskul.update', $eskul->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama eskul</label>
                                <input type="text" class="form-control" name="nama_eskul"
                                    value="{{ $eskul->nama_eskul }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Isi</label>
                                <input type="text" class="form-control" name="isi"
                                    value="{{ $eskul->isi }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('eskul')}}" class="btn btn-primary">Back</a
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
