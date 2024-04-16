<?php
// namespace
namespace App\Utils;
use Illuminate\Support\Facades\Storage;

// use App\Utils\Image;

use Image;

class ImageUpload{
    public static function uploadImage($request , $path=null, $height=null , $width=null ){
    //    $image = $request->file('logo');
       $imageName = md5(time() . rand()) . '.' . $request->getClientOriginalExtension();
       [$widthDefualt , $heightDefault]=getimagesize($request);
       $height = $height ?? $heightDefault;
       $width  = $width  ?? $widthDefualt;
       $image=Image::make($request->path());
       $image->fit( $width , $height, function ($constraint) {
        $constraint->upsize();})->stream();
        Storage::disk('assets')->put($path.'/'.$imageName, $image);
         return $imageName;
       }
}