<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//アクションが使用するモデルをuseする
use App\Models\ThreadRepository;
use App\Http\Controllers\PostController;


class ThreadController extends Controller
{
    // /【１】/threads へのGET
    public function index()
    {
        $f_name = "山田";
        $l_name = "太郎";
        // threadディレクトリにあるindex.blade.phpに渡す
        return view('threads.index', compact('f_name', 'l_name'));
    }
    // 【２】/threads/create へのGET
    public function create()
    {
        $f_name = "スレッド";
        $l_name = "作成";
        return view('threads.create', compact('f_name', 'l_name'));
    }

    // 【３】スレッド作成メソッド
    public function store(Request $request)
    {
        $thread_array = array(
            'user_id' => 1,
            'title' => $request->title
        );
        //ImageRepositoryへ依頼
        ThreadRepository::insert($thread_array);


        //Postコントローラーの書込メソッドを呼び出し、所謂「１」をpostsテーブルに保存する
        $post_controller = new postController();
        $post_controller->store($request);

        $request_all = $request->all();
        //return redirect('/threads');
        return view('threads.complete', compact('request_all'));
    }
}
