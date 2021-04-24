<?php

namespace App;

use App\Media;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function media(){
        return $this->morphMany(Media::class, 'mediable');
    }
}
