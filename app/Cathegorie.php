<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cathegorie extends Model
{
    protected $guarded = [];
    public function articles(){
        return $this->hasMany(Article::class)->orderBy('created_at','DESC');
    }
}
