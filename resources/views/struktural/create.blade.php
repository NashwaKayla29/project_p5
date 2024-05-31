@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Struktural</div>
                    <div class="card-body">
                        <form action="{{ route('struktural.store') }}" method="post" 
                            enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                <label class="form-label">Nama guru</label>
                                <select name="id_guru" class="form-control">
                                    <option value=""></option>
                                    @foreach ($guru as $data)
                                        <option value="{{ $data->id }}">
                                            {{ $data->nama_guru }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Jabatan</label>
                                <select name="id_jabatan" class="form-control">
                                    <option value=""></option>
                                    @foreach ($jabatan as $data)
                                        <option value="{{ $data->id }}">
                                            {{ $data->nama }}</option>
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
