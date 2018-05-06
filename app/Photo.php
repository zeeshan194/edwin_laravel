<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'file'
    ];

    protected $uploads = '/edwin_laravel/public/images/';

    public function getFileAttribute($file){
        return $this->uploads . $file;
    }
}
