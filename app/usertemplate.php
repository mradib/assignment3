<?php

namespace app;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class usertemplate extends Model
{
    protected $guarded = [];

    public static function findBySlug($slug)
    {
        return new usertemplate([
            'title' => Str::title(str_replace('-', ' ', $slug)),
            'content' => 'This is content, put more here!',
            'slug' => $slug,
        ]);
    }
}
