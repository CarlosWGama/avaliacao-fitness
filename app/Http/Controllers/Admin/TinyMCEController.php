<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TinyMCEController extends Controller
{
    //

    public function upload(Request $request) {
        reset ($_FILES);
        $temp = current($_FILES);
        if (is_uploaded_file($temp['tmp_name'])){
            
            $extensao = explode('.', $temp['name']);
            $extensao = end($extensao);
     
            $nomeArquivo = date('y-m-d').'-'.Str::uuid().'.'.$extensao;
            move_uploaded_file($temp['tmp_name'], storage_path('app/public/tinymce/'.$nomeArquivo)); 
            return json_encode(['location' => url('storage/tinymce/'.$nomeArquivo)]);
        }
        
        // Notify editor that the upload failed
        header("HTTP/1.0 500 Server Error");

    }
}
