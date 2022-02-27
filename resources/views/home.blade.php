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

    <div class="row justify-content-center mt-5">
        <div class="col-md-12">

            <div class="card mt-6" style="matgin-top:15px">
                <div class="card-header">
                    <b>List Data Nota</b>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Supplier</th>
                            <th scope="col">Supplier Produk</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
