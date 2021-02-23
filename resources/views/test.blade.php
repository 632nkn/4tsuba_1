<?php

use App\Library\BasicSqlClass;


//共通ライブラリのテーブル最終行取得メソッドを呼ぶ
$threads_last_inserted_id = BasicSqlClass::getLastInsertedID('threads');
$posts_last_inserted_id = BasicSqlClass::getLastInsertedID('posts');
$images_last_inserted_id = BasicSqlClass::getLastInsertedID('images');

print_r($threads_last_inserted_id);
print_r($posts_last_inserted_id);
print_r($images_last_inserted_id);
