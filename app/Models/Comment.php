<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = ['id', 'postuser_id', 'post_id', 'comment_body', 'created_at', 'updated_at'];

    // public function comments()
    // {
    //     Comment::wherepost_id(1)->delete();
    // }
}
