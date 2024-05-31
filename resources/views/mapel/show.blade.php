@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Mapel</div>
                    <div class="card-body">
                        <form action="" method="Post">
                            <div class="mb-3">
                                <label class="form-label">Nama mapel</label>
                                <input type="text" class="form-control" name="mapel"value="{{ $mapel->mapel }}" disabled>
                            </div>
                            <a href="{{url('mapel')}}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
