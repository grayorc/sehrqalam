<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translator extends Model
{
    use HasFactory;

    protected $table = 'translators';
    public $timestamps = false;
    protected $fillable = [
        'submission_id',
        'name',
        'code_meli',
    ];
}
