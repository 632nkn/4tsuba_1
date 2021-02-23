<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//アクションが使用するモデルをuseする！
use App\Models\Image;


class ImageRepository extends Model
{
    use HasFactory;

    public static function insert($image_array)
    {
        $image = new Image();

        $image->create([
            'post_id' => $image_array["post_id"],
            'image_name' => $image_array["image_name"],
            'image_size' => $image_array["image_size"]
        ]);
    }
}
