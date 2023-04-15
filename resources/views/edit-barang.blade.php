@extends('layouts.layout')
@section('contents')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Data Barang</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('update-barang', [$barang->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input value="{{$barang->nama_barang}}" type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Barang</label>
                <input value="{{$barang->jumlah_barang}}" type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Masukkan Jumlah Barang">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi Barang</label>
                <input value="{{$barang->deskripsi_barang}}" type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang" placeholder="Masukkan Deskripsi Barang">
            </div>

            <div class="form-group">
                <label>Kondisi Barang</label>
                <select class="form-control" id="kondisi_barang" name="kondisi_barang">
                    <option value="layak">Layak</option>
                    <option value="tidak layak">Tidak layak</option>
                </select>
            </div>

            <div class="form-group">
                <label>Lokasi Ruangan</label>
                <select class="form-control" id="id_ruang" name="id_ruang">
                    @foreach($ruangan as $item)
                    <option value="{{$item->id}}">{{$item -> nama_ruangan}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Foto Barang</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Foto Barang</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection