<?php

namespace App\traits;

use Illuminate\Support\Facades\Request;

trait ImageUpload
{
    public function storageTreatment($image): string
    {
        $extension = $image->extension();
        $name = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $image->move(public_path('img/events'), $name);

        return $name;
    }
}
