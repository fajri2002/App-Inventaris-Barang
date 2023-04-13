@extends('layouts.layout')
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-between align-center">
                <h3 class="card-title">Table Ruang</h3>
                <div class="ml-auto">
                    <a href="tambahRuang"><button type="button" class="btn btn-success">Tambah Ruangan</button></a>
                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruang</th>
                            <th width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ruangan as $item)
                        <tr>
                            <td>{{$item -> id}}</td>
                            <td>{{$item -> nama_ruangan}}</td>
                            <td><button type="button" class="btn btn-block btn-info">Edit</button>
                                <button type="button" class="btn btn-block btn-danger">Hapus</button>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection