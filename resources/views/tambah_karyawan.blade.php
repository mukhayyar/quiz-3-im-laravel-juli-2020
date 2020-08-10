@extends('layouts.master')
@section('content')
<form action="/proyek/{{$proyek->id}}/daftarkan-staff" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlSelect1">Tambah Staff</label>
    <select class="form-control" id="exampleFormControlSelect1">
    @foreach($karyawan as $man)
      <option>{{$man->nama}}</option>
      <input type="hidden" name="karyawan_id" value="{{$man->id}}">
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

