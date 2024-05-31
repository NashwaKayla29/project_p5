@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Struktural</div>
                    <div class="card-body">
                        <form action="{{ route('struktural.update', $struktural->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">id_guru</label>
                                <select class="form-control" name="id_guru">
                                    @foreach ($guru as $data)
                                        <option value="{{$data->id}}" {{$data->id == $struktural->id_guru ? 'selected' : ''}}>{{$data->nama_guru}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">id_jabatan</label>
                                <select class="form-control" name="id_jabatan">
                                    @foreach ($jabatan as $data)
                                        <option value="{{$data->id}}" {{$data->id == $struktural->id_jabatan ? 'selected' : ''}}>{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sampul</label>
                                <img src="{{asset ('/image/struktural/' . $struktural->sampul)}}" class="mb-2" width="100" alt="">
                                <input type="file" class="mt-2" name="sampul" value="{{$struktural->sampul}}">
                            </div>
                            <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="{{url('struktural')}}" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
