@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="/nota/add/" method="post" enctype="multipart/form-data">
                        @csrf
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
                                    <input type="text" required name="nama" id="" class="form-control form-control-sm" placeholder="Masukkan nama supplier">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Supplier Produk (Brand)</label>
                                    <input type="text" required name="produk" id="" class="form-control form-control-sm" placeholder="Masukkan nama produk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" required name="alamat" id="" class="form-control form-control-sm" placeholder="Masukkan nama alamat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Keperluan</label>
                                    <input type="text" required name="keperluan" id="" class="form-control form-control-sm" placeholder="Masukkan nama keperluan supplier">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nota Tagihan</label>
                                    <input type="file" required name="tagihan" id="" class="form-control form-control-sm">
                                    <img src="https://wiraraja.ac.id/images/berita/empty.jpg" style="width:100%;border-radius:5px;margin-top:3px;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nota BDT</label>
                                    <input type="file" name="bdt" required id="" class="form-control form-control-sm">
                                    <img src="https://wiraraja.ac.id/images/berita/empty.jpg" style="width:100%;border-radius:5px;margin-top:3px;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Keterangan</label><br>
                                    <input type="radio" required name="keterangan" value="lunas"> Lunas |
                                    <input type="radio" required name="keterangan" value="belum"> Belum Lunas
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Admin</label><br>
                                    <select name="admin" required id="" class="form-control form-control-sm">
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
                                <p align="right"><button type="submit" class="btn btn-primary btn-sm pull-right">Simpan Nota</button></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-12">

            <div class="card mt-6" style="matgin-top:15px">
                <div class="card-header">
                    <b>List Data Nota</b>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button>

                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- konten modal-->
                            <div class="modal-content">
                                <!-- heading modal -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Bagian heading modal</h4>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                    <p>bagian body modal.</p>
                                </div>
                                <!-- footer modal -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Supplier</th>
                            <th scope="col">Supplier Produk</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($datanota as $data)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#exampleModal">{{ $data->nama }}</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Launch demo modal
                                      </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b>{{ $data->nama }}</b></h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <b>Nota Tanggal :</b> {{ $data->tanggal }}  {{ $data->jam }}<br>
                                                            <b>Keperluan</b>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <b>Nota Tagihan</b><br>
                                                            <img src="img/tagihan/{{ $data->tagihan }}" style="width:100%;border-radius:5px;margin-top:3px;" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $data->produk }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>
                                    <form action="/nota/delete/{{ $data->id }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</button>
                                        <button onclick="return confirm('Yakin nota dihapus ?')" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i>Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div>
                        {{ $datanota->links() }}
                      </div>
                </div>
                <div class="card-footer">
                    {{-- Total Nota : {{ jumlahnota }}<br> --}}
                    Toserdas &copy; 2022

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
