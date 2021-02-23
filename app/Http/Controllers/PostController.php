<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//クエリビルダを使うために、DBファサードをuseする
use Illuminate\Support\Facades\DB;

//アクションが使用するモデルをuseする
use App\Models\PostRepository;
use App\Http\Controllers\ImageController;

class PostController extends Controller
{


    // /PostRepositoryクラスでインサート
    public function store(Request $request)
    {
        $post_array = array(
            'user_id' => 1,
            'thread_id' => 1,
            'body' => $request->body,
            'has_image' => $request->hasFile('image'),
            'is_response' => 0,
            'response_to' => 0
        );
        //ImageRepositoryクラスのインサートメソッドでテーブル保存
        PostRepository::insert($post_array);

        /*         $post = new Post();
        $post->body = $request->body;
        $post->user_id = 1;
        $post->thread_id = 2;
        //has_image列の値を判定
        if ($request->hasFile('image')) {
            $post->has_image = 1;
        } else {
            $post->has_image = 0;
        }
        $post->save();
 */
        //画像あるとき、Imageコントローラーの画像保存メソッドを呼ぶ
        if ($post_array["has_image"]) {

            $image_controller = new ImageController();
            $image_controller->store($request);
        }
    }
}
