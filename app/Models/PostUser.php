<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUser extends Model
{
    use HasFactory;
    protected $table = 'postusers';
    protected $fillable = ['id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];
}
