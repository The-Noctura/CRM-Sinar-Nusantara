<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
  public function index()
  {
    $daftarGudang = Gudang::all();

    return view('gudang.index', compact('daftarGudang'));
  }
}
