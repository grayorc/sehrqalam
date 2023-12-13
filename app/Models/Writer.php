<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;
    protected $table = 'writers';
    public $timestamps = false;
    protected $fillable = [
        'submission_id',
        'name',
        'code_meli',
    ];


    public function submissions()
    {
        return $this->belongsTo(Submission::class);
    }

}
