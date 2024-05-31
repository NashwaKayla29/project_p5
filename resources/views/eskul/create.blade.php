@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Eskul</div>
                    <div class="card-body">
                        <form action="{{ route('eskul.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">nama eskul</label>
                                <input type="text" class="form-control" name="nama_eskul">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">isi</label>
                                <input type="text" class="form-control" name="isi">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
