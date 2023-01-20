<?php

namespace App\Models;


use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postbserver extends Model
{
    use HasFactory;
    protected $table = 'postbservers';
    protected $fillable = ['id', 'title', 'slug', 'postuser_id', 'created_at', 'updated_at'];


    // public static function boot()
    // {
    //     parent::boot();
    //     static::saving(function ($post) {
    //         $post->slug = Str::slug($post->title);
    //     });
    //     static::deleted(function ($post) {
    //         $post->comments()->delete();
    //     });
    // }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
