<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes();
            $table->unsignedSmallInteger('user_id')->comment('ユーザーID')->default(1);
            $table->unsignedSmallInteger('thread_id')->comment('スレッドID')->default(1);
            $table->string('body', 1000)->comment('書込本文');
            $table->boolean('has_image')->default(false)->comment('画像があるか')->default(0);
            $table->boolean('is_edited')->default(false)->comment('編集済みか')->default(0);
            $table->boolean('is_response')->default(false)->comment('他への返信か')->default(0);
            $table->unsignedBigInteger('response_to')->comment('返信先ID')->default(0);
            $table->unsignedSmallInteger('like_count')->comment('わかる数')->default(0);

            //外部キー制約つけなくてもよい？
            //$table->foreign('response_to')->references('id')->on('posts')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
