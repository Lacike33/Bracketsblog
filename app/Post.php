<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','description','content'];

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getRitchTextAttribute()
    {
        return e( $this->content );
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucfirst( $value );
        $this->attributes['slug'] = str_slug( $value );
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
