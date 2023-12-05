<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgeCategory extends Model
{
    protected $table = "age_category";
    protected $fillable = [
        'name',
        'label'
    ];

    public $timestamps = false;

    use HasFactory;
}
