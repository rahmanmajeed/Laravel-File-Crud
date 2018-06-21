<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
      return view('uploads/upload');
    }

    public function store(Request $request)
    {
      return $request->file('image');
    }
}
