@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Jurusan</div>
                    <div class="card-body">
                        <form action="" method="Post">
                            <div class="mb-3">
                                <label class="form-label">Kaprog</label>
                                <input type="text" class="form-control" name="kaprog"value="{{ $jurusan->kaprog }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan"value="{{ $jurusan->nama_jurusan }}" disabled>
                            </div>
                            <a href="{{url('jurusan')}}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
