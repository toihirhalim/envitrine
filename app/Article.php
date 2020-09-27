<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    public function cathegorie(){
        return $this->belongsTo(cathegorie::class);
    }
}
