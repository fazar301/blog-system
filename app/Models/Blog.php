<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'blogs';
    protected $fillable = ['title','author','slug','body','thumb','categories', 'author_pic'];
    protected $primaryKey = 'id';
    protected $with = ['categorie','author'];
    
    public function author(): BelongsTo{
        return $this->belongsTo(User::class,'author_id');
    }
    public function categorie(): BelongsTo{
        return $this->belongsTo(Categorie::class,'categorie_id');
    }

    public function scopeFilter(Builder $query): void{
        $query->where('title','like', '%' . request('search') . '%');
    }
}
