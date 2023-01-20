<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class UploadImageController extends Controller
{
    public function index()
    {
        return view('test', ['images' => image::get()]);
    }
    public function upload(Request $request)
    {
        //dd($request->file('profile')->getClientOriginalName());
        //dd($request->all());

        $image = $request->profile;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images', $name);
        $image_save = new Image;
        $image_save->name = $name;
        $image_save->save();
        return back();
    }
    public function downloadImage(Image $image)
    {
        return response()->download(storage_path('app/public/images/' . $image->name));
    }
}
