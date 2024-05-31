@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Guru</div>
                    <div class="card-body">
                        <form action="" method="Post">
                            <div class="mb-3">
                                <label class="form-label">Nama guru</label>
                                <input type="text" class="form-control" name="nama_guru"value="{{ $guru->nama_guru }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">telepon</label>
                                <input type="text" class="form-control" name="telepon"value="{{ $guru->telepon }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email"value="{{ $guru->email }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Id mapel</label>
                                <input type="text" class="form-control" name="id_mapel" value="{{ $guru->id_mapel }}"
                                    disabled>
                            </div>
                            <a href="{{ url('guru') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
