<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shahr extends Model
{
    protected $table = "shahr";
    protected $fillable = [
        'name',
        'ostan',
        'amar_code'
    ];
    use HasFactory;
}
