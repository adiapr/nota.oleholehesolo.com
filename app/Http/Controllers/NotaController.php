<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotaModel;
use File;
use Image;

class NotaController extends Controller
{
    //
    public function notaAdd(Request $request){
        $this->validate($request,[
            'tagihan'=>'required|image|mimes:jpg,jpeg,png',
            'bdt'=>'required|image|mimes:jpg,jpeg,png'
        ]);


        // tagihan
        $tagihan        = $request->tagihan;
        $namatagihan    = time().'.'.$tagihan->getClientOriginalExtension();
        $tagihan->move('img/tagihan/', $namatagihan);

        // bdt
        $bdt        = $request->bdt;
        $namabdt    = time().'.'.$tagihan->getClientOriginalExtension();
        $bdt->move('img/bdt/', $namabdt);

        $nota = new NotaModel;

        $nota->nama         = $request->nama;
        $nota->produk       = $request->produk;
        $nota->alamat       = $request->alamat;
        $nota->keperluan    = $request->keperluan;
        $nota->tagihan      = $namatagihan;
        $nota->bdt          = $namabdt;
        $nota->keterangan   = $request->keterangan;
        $nota->admin        = $request->admin;
        $nota->tanggal      = date('Y-m-d');
        $nota->jam          = date('H:i');

        $nota->save();

        toast('Data berhasil ditambahkan','success');
        return redirect('/');
    }

    public function notaDelete($id){
        $nota = NotaModel::find($id);

        $tagihan = $nota->tagihan;
        $bdt    = $nota->bdt;

        File::delete('img/tagihan/'.$tagihan);
        $nota->delete();

        File::delete('img/bdt/'.$bdt);
        $nota->delete();

        toast('Data telah dihapus','info');
        return redirect('/');
    }
}
