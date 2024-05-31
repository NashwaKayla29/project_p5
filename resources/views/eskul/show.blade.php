@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Eskul</div>
                    <div class="card-body">
                        <form action="" method="Post">
                            <div class="mb-3">
                                <label class="form-label">Nama Eskul</label>
                                <input type="text" class="form-control" name="nama_eskul"value="{{ $eskul->nama_eskul }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">isi</label>
                                <input type="text" class="form-control" name="isi"value="{{ $eskul->isi }}" disabled>
                            </div>
                            <a href="{{url('eskul')}}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
