@extends('layout.admin')

@section('content')
<div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Absensi Kehadiran Siswa</h1> --}}
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
            </ol>
          </div>
        </div>
      </div>
    </div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nis:</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{$student->nis}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$student->nama}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5" >
            <label>Kelas:</label>
            <select class="form-control" name="rayon_id" id="exampleSelect1">
                <option selected disabled>-- Pilih Rayon --</option>
                @foreach ($rayons as $rayon)
                <option value="{{ $rayon->id }}">
                    {{ $rayon->rayon }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5" >
            <label>Jurusan:</label>
            <select class="form-control" name="rayon_id" id="exampleSelect1">
                <option selected disabled>-- Pilih Rayon --</option>
                @foreach ($rayons as $rayon)
                <option value="{{ $rayon->id }}">
                    {{ $rayon->rayon }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5" >
            <label>Rayon:</label>
            <select class="form-control" name="rayon_id" id="exampleSelect1">
                <option selected disabled>-- Pilih Rayon --</option>
                @foreach ($rayons as $rayon)
                <option value="{{ $rayon->id }}">
                    {{ $rayon->rayon }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
