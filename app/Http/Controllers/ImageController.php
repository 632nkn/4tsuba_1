<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//アクションが使用するモデルをuseする
use App\Models\ImageRepository;
use App\Library\BasicSqlClass;


class ImageController extends Controller
{
    // 画像保存メソッド  書き込み時に呼び出される
    public function store(Request $request)
    {
        //リクエストされたファイルの情報を持ったUploadedFileクラスのインスタンス
        $image = $request->file('image');

        //テーブル処理
        $image_array = array(
            'post_id' => BasicSqlClass::getLastInsertedID('posts'),
            'image_name' => time() . '.' . $image->getClientOriginalExtension(),
            'image_size' => $image->getSize()
        );
        ImageRepository::insert($image_array);

        //ファイル保存処理①
        // storage/app以下のimagesディレクトリにハッシュ化されたファイル名で保存
        $image->store('images');

        //ファイル保存処理②
        // public以下のimagesディレクトリにコピー(保存？)する
        $target_path = public_path('images/');
        $image->move($target_path, $image_array["image_name"]);




        /*         $image_model = new Image();
        $image_model->image_name = $image_name;
        $image_model->image_size = $image_size;
        $image_model->post_id = $posts_last_inserted_id;
        $image_model->save();
 */
    }
}
