@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data guru</div>
                    <div class="card-body">
                        <form action="{{ route('guru.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama guru</label>
                                <input type="text" class="form-control" name="nama_guru">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">telepon</label>
                                <input type="text" class="form-control" name="telepon">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Guru Mapel</label>
                                <select name="id_mapel" class="form-control">
                                    <option value=""></option>
                                    @foreach ($mapel as $data)
                                        <option value="{{ $data->id }}">
                                            {{ $data->mapel }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                    <label class="form-label">Sampul</label>
                                    <input type="file" class="form-control" name="sampul">
                                </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
