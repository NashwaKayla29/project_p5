@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Artikel</div>
                    <div class="card-body">
                        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">judul</label>
                                <input type="text" class="form-control" name="judul"
                                    value="{{ $artikel->judul }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">isi</label>
                                <input type="text" class="form-control" name="isi"
                                    value="{{ $artikel->isi }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('jabatan')}}" class="btn btn-success">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
