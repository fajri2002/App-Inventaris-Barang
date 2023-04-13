@extends('layouts.layout')
@section('contents')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Barang">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Barang</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Jumlah Barang">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi Barang</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Deskripsi Barang">
            </div>

            <div class="form-group">
                <label>Kondisi Barang</label>
                <select class="form-control">
                    <option value="layak">Layak</option>
                    <option value="tidak layak">Tidak layak</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Foto Barang</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
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