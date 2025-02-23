<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $table = 'fee';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'label',
        'price',
    ];
}
