<?php

namespace App\traits;

use Illuminate\Http\UploadedFile;

trait ImageUpload
{
    public function storageTreatment(UploadedFile $image): string
    {
        $extension = $image->extension();
        $name = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $image->move(public_path('img/events'), $name);

        return $name;
    }
}
