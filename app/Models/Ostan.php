<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ostan extends Model
{
    protected $table = "ostan";
    protected $fillable = [
        'name',
        'amar_code'
    ];
    use HasFactory;
}
