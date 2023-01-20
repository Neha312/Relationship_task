<?php

namespace App\Http\Controllers;

use ZipArchive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ZipController extends Controller
{
    public function index()
    {
        return view('zipfile');
    }
    public function download()
    {

        $zip = new ZipArchive();
        $file_name = 'zip_name.zip';
        if ($zip->open(public_path($file_name), ZipArchive::CREATE) == TRUE) {
            $files = File::files(public_path('files'));
            if (count($files) > 0) {
                foreach ($files as $key => $value) {
                    $relativeName = basename($value);
                    $zip->addFile($value, $relativeName);
                }
                $zip->close();
                return response()->download(public_path($file_name));
            }
        }
        dd('error');
    }
}
