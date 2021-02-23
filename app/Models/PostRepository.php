<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//アクションが使用するモデルをuseする
use App\Models\Post;


class PostRepository extends Model
{
    use HasFactory;

    public static function insert($post_array)
    {

        $post = new Post();

        $post->create([
            'user_id' => $post_array["user_id"],
            'thread_id' => $post_array["thread_id"],
            'body' => $post_array["body"],
            'has_image' => $post_array["has_image"],
            'is_response' => $post_array["is_response"],
            'response_to' => $post_array["response_to"],
        ]);
    }
}
