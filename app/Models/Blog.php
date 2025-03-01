<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'blogs';
    protected $fillable = ['title','author','slug','body','thumb','categories', 'author_pic'];
    protected $primaryKey = 'id';
}
