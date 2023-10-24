<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Post extends Model
{
    use HasFactory;
    public function post (){
        return $this->belongsTo(User::class);
    }
    public function image (){
        return $this->morphOne(Image::class,'imageable');
    }
    public function comment (){
        return $this->morphMany(Comment::class,'commentable');
    }
    public function tag()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
}
