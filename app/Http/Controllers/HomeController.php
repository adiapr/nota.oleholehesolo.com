<?php

namespace App\Http\Controllers;
use App\Models\NotaModel;
use Illuminate\Pagination\Paginator;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Paginator::useBootstrap();
        $batas = 5;
        $jumlahnota = NotaModel::count();
        $datanota = NotaModel::orderBy('id','desc')->paginate($batas);
        $no = $batas * ($datanota->currentPage() - 1);
        return view('home', compact('datanota', 'no', 'jumlahnota'));
    }
}
