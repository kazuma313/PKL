<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    //
    protected $fillable = ['nama'];
    public function isi_galeries(){
        return $this->hasMany(isi_galery::class);
    }
}
