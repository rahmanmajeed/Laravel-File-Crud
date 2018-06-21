<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class FileController extends Controller
{
    public function index()
    {
      return view('uploads/upload');
    }

    public function store(Request $request)
    {
      if ($request->hasFile('image')) {
        $request->file('image');
        //$request->image->extension();
        //$request->image->path();

        //store file in store/app/public
        //return $request->image->store('public');
        //another way to store file using Storage Facade;
        //return Storage::putFile('public',$request->file('image'));
      }
      else{
        return 'No File Selected';
      }

    }
}
