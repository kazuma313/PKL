<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    //
    protected $fillable = ['nama', 'email', 'nomor_hp', 'comentar'];
    protected $table = 'comments';
}
