@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Hi, Awesome Team</h5>
                            <h5><strong>Sistem Manajemen Nota Barang</strong></h5>
                            <hr>
                            <b> <u>Silahkan masukkan data nota </u></b>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Supplier</label>
                                <input type="text" name="nama" id="" class="form-control form-control-sm" placeholder="Masukkan nama supplier">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Supplier Produk (Brand)</label>
                                <input type="text" name="produk" id="" class="form-control form-control-sm" placeholder="Masukkan nama produk">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" id="" class="form-control form-control-sm" placeholder="Masukkan nama alamat">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Keperluan</label>
                                <input type="text" name="keperluan" id="" class="form-control form-control-sm" placeholder="Masukkan nama keperluan supplier">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nota Tagihan</label>
                                <input type="file" name="tagihan" id="" class="form-control form-control-sm">
                                <img src="https://wiraraja.ac.id/images/berita/empty.jpg" style="width:100%;border-radius:5px;margin-top:3px;" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nota BDT</label>
                                <input type="file" name="bdt" id="" class="form-control form-control-sm">
                                <img src="https://wiraraja.ac.id/images/berita/empty.jpg" style="width:100%;border-radius:5px;margin-top:3px;" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Keterangan</label><br>
                                <input type="radio" name="keterangan" value="lunas"> Lunas |
                                <input type="radio" name="keterangan" value="belum"> Belum Lunas
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Admin</label><br>
                                <select name="admin" id="" class="form-control form-control-sm">
                                    <option value="">-- Pilih --</option>
                                    <option value="Christine">Christine</option>
                                    <option value="Fatika">Fatika</option>
                                    <option value="Baron">Baron</option>
                                    <option value="Agnesa">Agnesa</option>
                                    <option value="Vikka">Vikka</option>
                                    <option value="Gabriel">Gabriel</option>
                                    <option value="Khusna">Khusna</option>
                                    <option value="Kartika">Kartika</option>
                                    <option value="Dani">Dani</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-right"><br>
                            <p align="right"><button class="btn btn-primary btn-sm pull-right">Simpan Nota</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
