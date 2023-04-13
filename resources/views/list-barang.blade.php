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
                                        <th>Foto</th>
                                        <th>Deskripsi Barang</th>
                                        <th>Ruangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-success">Approved</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td>Ruang</td>
                                        <td><button type="button" class="btn btn-block btn-info">Edit</button>
                                            <button type="button" class="btn btn-block btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
@endsection