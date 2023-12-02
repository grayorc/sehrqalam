<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'detail',
        'user_id',
        'price',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function commnets()
    {
        return $this->hasMany(Comment::class);
    }
    public function book()
    {
    }
}
