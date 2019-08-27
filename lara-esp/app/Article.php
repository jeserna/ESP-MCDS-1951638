<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name', 'image', 'content', 'user_id', 'category_id'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
