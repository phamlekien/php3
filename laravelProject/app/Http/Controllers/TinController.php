<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function index()
    {
        $tins = DB::table('tins')->latest()->paginate(5);
        return view('index', compact('tins'));
    }

    public function tinTheoLoai($id)
    {
        $tins = DB::table('tins')->where('loai_tin_id', $id)->paginate(5);
        return view('tintrongloai', compact('tins'));
    }

    public function chiTietTin($id)
    {
        $tin = DB::table('tins')->where('id', $id)->first();
        return view('chitiettin', compact('tin'));
    }

    public function timKiem(Request $request)
    {
        $keyword = $request->input('keyword');
        $tins = DB::table('tins')->where('tieude', 'like', "%$keyword%")->paginate(5);
        return view('timkiem', compact('tins'));
    }
}

