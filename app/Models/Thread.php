<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
//ソフトデリートを有効にするために追加
use Illuminate\Database\Eloquent\SoftDeletes;


class Thread extends Model
{
    use HasFactory;

    //ソフトデリートを有効にするために追加
    use SoftDeletes;

    protected $guarded = [''];
}
