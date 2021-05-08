<?php

namespace App;

use App\Media;
use App\Comment;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Program extends Model
{
    use Sluggable;
    protected $dates = ['event_date'];
    protected $fillable = ['user_id','name','description','event_date'];
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

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
