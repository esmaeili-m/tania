<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function index(Request $request){

        $file = $request->file('upload');
        // logo.png
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); // logo
        $ext = $file->getClientOriginalExtension(); // png

        $file_name = $base_name . '_' . time() . '.' . $ext;
        $file->move(public_path('images'), $file_name);
        $function = $request->CKEditorFuncNum;
        $url = asset('images/'.$file_name);

        return response("<script>window.parent.CKEDITOR.tools.callFunction({$function}, '{$url}', 'فایل به درستی اپلود شد')</script>");
    }
}
