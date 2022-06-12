<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //1 kategori banyak produk
    public function medicines(){
        return $this->hasMany('App\Medicine','category_id','id');
    }

    public $timestamps = false;
}
