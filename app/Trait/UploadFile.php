<?php

namespace App\Trait;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait uploadFile
{
    public function uploadImage(Request $request)
    {
        $data['image'] = $request->image;
//        dd($data['image']);
        $nameImage = Str::random(6);
        if ($request->has("image") != null) {
            $fileName = "{$nameImage}.jpg";
            $request->file('image')->storeAs('anh', $fileName, 'public');
            $data['image'] = "$fileName";
            return $data['image'];
        }
    }
}