<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isi_galery extends Model
{
    //
    protected $fillable = ['galeri_id','jenis', 'letak'];
    
    public function galeri(){
        return $this->belongsTo(galery::class);
    }
}
