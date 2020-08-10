@extends('layouts.master')
@section('content')
<form action="/proyek/{{$proyek->id}}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Proyek</label>
    <input type="text" value="{{$proyek->nama_proyek}}" name="nama_proyek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Don't be shy to ask :)</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi Proyek</label>
    <textarea class="form-control" name="deskripsi_proyek" id="exampleFormControlTextarea1" rows="3">{{$proyek->deskripsi_proyek}}</textarea>
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Tanggal Dimulai</label>
    <input type="date" value="{{$proyek->tanggal_dimulai}}" placeholder="yyyy-mm-dd" class="form-control" name="tanggal_dimulai"></input>
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Tanggal Deadline</label>
    <input type="date" value="{{$proyek->tanggal_deadline}}" placeholder="yyyy-mm-dd" class="form-control" name="tanggal_deadline"></input>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection

