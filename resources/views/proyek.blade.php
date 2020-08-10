@extends('layouts.master')
@section('content')
<!-- Page Heading --
          <!-- DataTales Example -->
    <a class="btn btn-success mr-2" href="/proyek/create">Tambah data</a>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Proyek</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Dimulai</th>
                      <th>Tanggal Deadline</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Dimulai</th>
                      <th>Tanggal Deadline</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($proyek as $pro)
                    <tr>
                      <td>{{$pro->nama_proyek}}</td>
                      <td>{{$pro->deskripsi_proyek}}</td>
                      <td>{{$pro->tanggal_dimulai}}</td>
                      <td>{{$pro->tanggal_deadline}}</td>
                      @if($pro->status <= 1)
                      <td>Aktif</td>
                      @else
                      <td>Selesai</td>
                      @endif
                      <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <form action="/proyek/{{$pro->id}}/edit">
                            <button class="btn btn-primary mr-2">Edit</button>
                        </form>
                        <form action="/proyek/{{$pro->id}}/daftarkan-staff">
                            <button class="btn btn-primary mr-2">Add Staff</button>
                        </form>
                        <form action="/proyek/{{$pro->id}}">
                            <button class="btn btn-success mr-2">Show</button>
                        </form>
                        <form action="/proyek/{{$pro->id}}" method="POST">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@push('scripts')
<script src="{{asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('sbadmin2/js/demo/datatables-demo.js')}}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
@endsection

