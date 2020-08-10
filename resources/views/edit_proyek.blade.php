@extends('layouts.master')
@section('content')
<form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
  <div class="form-group">
    <label for="exampleInputEmail1">Pertanyaan</label>
    <input type="text" value="{{$pertanyaan->judul}}" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Don't be shy to ask :)</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Isi Pertanyaan</label>
    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3">{{$pertanyaan->isi}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection

