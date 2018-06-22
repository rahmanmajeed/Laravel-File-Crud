<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\File;

class FileController extends Controller
{
    public function index()
    {
      return view('uploads/upload');
    }

    public function store(Request $request)
    {

         $file=$request->file('image');
         $filename=$file->getClientOriginalName();

         $filesize=$file->getClientSize();
         $file->storeAs('public',$filename);
         $f=new File;
         $f->name=$filename;
         $f->size=$filesize;
         $f->save();
         return redirect()->route('file.show');

        //$request->image->extension();
        //$request->image->path();

        //store file in store/app/public
        //return $request->image->store('public');
        //another way to store file using Storage Facade;
        //return Storage::putFile('public',$request->file('image'));


    }

    public function show()
    {

      //return Storage::files('public');
      //real time fetch all files;
      //return Storage::allFiles('public');
      //directory create;
      // if (Storage::makeDirectory('public/new')) {
      //   return 'created';
      // }
      //directory delete
      // if (Storage::deleteDirectory('public/new')) {
      //   return 'created';
      // }

      /*link to public folder to storage/public folder 'php artisan storage:link' */
      // $url=Storage::url('rwD4nT3UUK227Xkta3IeWWnMYujwNVz95Rn0yIag.jpeg');
      // return "<img src='".$url."'/>";

      $file=File::all();

      return view('uploads.show',compact('file'));

    }

    public function edit($id)
    {
      $file=File::find($id);
      return view('uploads.edit',compact('file'));
    }
    public function update(Request $request, $id)
    {
      if($request->hasFile('image'))
      {
        $file=$request->file('image');
        $filename=$file->getClientOriginalName();

        $filesize=$file->getClientSize();
        $file->storeAs('public',$filename);
        $f=File::find($id);
        $f->name=$filename;
        $f->size=$filesize;
        $f->save();
      }

      else
      {
          echo "string";
      }
      return redirect()->route('file.show');
    }
}
