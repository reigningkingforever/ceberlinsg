<?php

namespace App;

use App\Media;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Program extends Model
{
    use Sluggable;
    protected $dates = ['event_date'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'separator' => '_'
            ]
        ];
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function media(){
        return $this->morphMany(Media::class, 'mediable');
    }
}
