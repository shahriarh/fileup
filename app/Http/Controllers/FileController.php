<?php

namespace App\Http\Controllers;

use App\File;
// use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::orderBy('id', 'desc')->get();
        return view('admin.pages.file.list')->with([
            'files' => $files
        ]);
    }

    public function create()
    {
        return view('admin.pages.file.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $files = new File();
        $files->name         = $request->name;
        $files->email        = $request->email;
        $files->phone        = $request->phone;
        // $files->image        = $request->image;

        if ($request->hasFile('image')) {
            // dd($request);
            $photo  = rand() . $request->file('image')->getClientOriginalName();
            $destination  = 'uploads/files';
            $request->file('image')->move($destination, $photo);

            $files->image  = $destination . '/' . $photo;
        }
        $files->save();
        return redirect()->route('fileupload.list');
    }

    public function delete($id)
    {
        $file = File::findOrfail($id);
        if (!is_null($file)) {
            //Delete Image
            if (File::exists('uploads/files/' . $file->image)) {
                File::delete('uploads/files/' . $file->image);
            }
            $file->delete();
        }
        return redirect()->route('fileupload.list');
    }
}
