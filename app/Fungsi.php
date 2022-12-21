<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fungsi extends Model
{
    //
    protected $fillable =['no','fungsi'];
    public function bagian(){
        return $this->belongsTo(bagian::class);
    }
}
