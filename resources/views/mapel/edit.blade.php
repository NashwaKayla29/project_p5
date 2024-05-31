@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Mapel</div>
                    <div class="card-body">
                        <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name mapel</label>
                                <input type="text" class="form-control" name="mapel"
                                    value="{{ $mapel->mapel }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('mapel')}}" class="btn btn-primary">Back</a
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
