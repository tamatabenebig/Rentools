<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */

    public function fileUpload()
    {
        return view('fileUpload');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function fileUploadPost(Request $request)
    {
        $request->validate([

            'file' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }
}