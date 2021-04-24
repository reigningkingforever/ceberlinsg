<?php

namespace App;

use App\Media;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    
    public function media(){
        return $this->morphOne(Media::class, 'mediable');
    }
}
