<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UploadFileController extends Controller
{
    //
    public function index() {
        return view('uploadfile');
    }

    public function upload(Request $request) {
        $request->validate([
            'file' => 'required',
        ]);



        $title = time() . '.' . request()->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $title);



        $storeFile = new Post;

        print_r($storeFile);
        $storeFile->title = $title;
        $storeFile->save();

        // return response()->json(['success' => 'File Uploaded Successfully']);
        alert()->success('Siipppp','Data berhasil ditambahkan');
    }
}
