<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Link extends Model
{
    use HasFactory;

    public static function insert($link, $code)
    {
        DB::insert("INSERT INTO 'link' ('link', 'code') VALUES ('" .$link. "','" .$code. "')");
    }
}
