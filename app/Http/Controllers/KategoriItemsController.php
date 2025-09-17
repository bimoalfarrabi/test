<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriItemsController extends Controller
{
    public function index()
    {
        return view('kategori_items.index.index');
    }
}
