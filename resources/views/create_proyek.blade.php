@extends('layouts.master')
@section('content')
<form action="/proyek" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Proyek</label>
    <input type="text" name="nama_proyek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Don't be shy to ask :)</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Isi Pertanyaan</label>
    <textarea class="form-control" name="deskripsi_proyek" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Manager</label>
    <select class="form-control" id="exampleFormControlSelect1">
    @foreach($manager as $man)
      <option>{{$man->nama}}</option>
      <input type="hidden" name="manager_id" value="{{$man->id}}">
    @endforeach
    </select>
  </div>
  <label for="exampleFormControlTextarea1">Tanggal Dimulai</label>
    <input type="date" placeholder="yyyy-mm-dd" class="form-control" name="tanggal_dimulai"></input>
  </div>
  <label for="exampleFormControlTextarea1">Tanggal Deadline</label>
    <input type="date" placeholder="yyyy-mm-dd" class="form-control" name="tanggal_dimulai"></input>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

