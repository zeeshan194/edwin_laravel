<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
//    protected $uploads = '/edwin_laravel/public/images/';
    protected $fillable = [
        'file'
    ];


//    public function getFileAttribute($file){
//        return $this->uploads . $file;
//    }
}
