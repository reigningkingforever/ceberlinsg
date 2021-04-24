<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function mediaable(){
        return $this->morphTo();
    }
}
