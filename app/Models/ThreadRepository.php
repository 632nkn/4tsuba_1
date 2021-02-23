<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//アクションが使用するモデルをuseする
use App\Models\Thread;


class ThreadRepository extends Model
{
    use HasFactory;

    public static function insert($thread_array)
    {

        $thread = new Thread();

        $thread->create([
            'user_id' => $thread_array["user_id"],
            'title' => $thread_array["title"]
        ]);
    }
}
