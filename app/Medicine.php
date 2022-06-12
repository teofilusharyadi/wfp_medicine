<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //melihat kategori sesuai kolom category_id
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function transactions()
    {
        return $this->belongsToMany('App\Transaction','medicine_transaction','medicine_id','transaction_id')
        ->withPivot('quantity','price');
    }

    public $timestamps = false;
}
