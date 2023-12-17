<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';

    protected $fillable = [
        'title',
        'user_id',
        'name',
        'secondary_title',
        'english_title',
        'category_id',
        'age_category_id',
        'word_number',
        'editing',
        'cover_design',
        'cover_detail',
        'file_path',
        'licence',
        'code_meli',
        'code_posti',
        'phone_number',
        'shahr_id',
        'ostan_id',
        'status',
        'price',
        'type',
    ];
    public function writers()
    {
        return $this->belongsToMany(Writer::class);
    }
}
