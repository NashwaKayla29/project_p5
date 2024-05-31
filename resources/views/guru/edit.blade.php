@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Guru</div>
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama guru</label>
                                <input type="text" class="form-control" name="nama_guru"value="{{ $guru->nama_guru }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">telepon</label>
                                <input type="text" class="form-control" name="telepon"value="{{ $guru->telepon }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">email</label>
                                <input type="text" class="form-control" name="email"value="{{ $guru->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">id mapel</label>
                                <input type="text" class="form-control" name="id"value="{{ $mapel->id }}">
                                
                                <select name="id_mapel" class="form-control">
                                    @foreach ($mapel as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $guru->id_mapel ? 'selected' : '' }}>
                                            {{ $data->nama_mapel }}</option>
                                    @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('guru')}}" class="btn btn-primary">Back</a
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
