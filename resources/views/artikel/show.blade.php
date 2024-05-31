@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data artikel</div>
                    <div class="card-body">
                        <form action="" method="Post">
                            <div class="mb-3">
                                <label class="form-label">judul</label>
                                <input type="text" class="form-control" name="judul"value="{{ $artikel->judul }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Isi</label>
                                <input type="text" class="form-control" name="isi"value="{{ $artikel->isi }}"
                                    disabled>
                            </div>
                            <a href="{{url('artikel')}}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
