@extends('layouts.layout')
@section('contents')
<div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-between align-center">
                            <h3 class="card-title">Table Barang</h3>
                            <div class="ml-auto">
                                <a href="tambahBarang"><button type="button" class="btn btn-success">Tambah Barang</button></a>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Kondisi Barang</th>
                                        <th>Jumlah Barang</th>
                                        <th>Deskripsi Barang</th>
                                        <th>Ruangan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($barang as $item)
                                    <tr>
                                        <td>{{$item -> id}}</td>
                                        <td>{{$item -> nama_barang}}</td>
                                        <td>{{$item -> kondisi_barang}}</td>
                                        <td>{{$item -> jumlah_barang}}</td>
                                        <td>{{$item -> deskripsi_barang}}</td>
                                        <td>{{$item -> ruangan->nama_ruangan}}</td>
                                        <td><img src="{{ url('/storage/posts_image/' .$item -> image_url) }}" style="height: 100px;" alt="Card image cap"></td>
                                        <td><a href="editBarang/{{$item -> id}}"><button type="button" class="btn btn-block btn-info">Edit</button></a>
                                            <a href="deleteBarang/{{$item -> id}}"><button type="button" class="btn btn-block btn-danger">Hapus</button></a>
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