<?php

namespace App\Library;

//クエリビルダを使うために、DBファサードをuseする
use Illuminate\Support\Facades\DB;

class BasicSqlClass
{

    // /テーブル最終行ID取得メソッド
    public static function getLastInsertedID($table)
    {
        // テーブルを指定
        $post = DB::table($table);
        $last_inserted_id = $post->max('id');
        return $last_inserted_id;
    }
}
