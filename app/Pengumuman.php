<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    // //
    protected $fillable = ['judul', 'sub_judul', 'pengumuman'];
    protected $table = 'pengumumans';
}
