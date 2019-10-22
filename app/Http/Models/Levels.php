<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Personal;

class Levels extends Model
{
    protected $table = 'LEVELS';
    protected $primaryKey = 'LEVELS_ID';

    protected $fillable = [
        'NAME', 'NOTE'
    ];

    public $timestamps = false;

    public function personal()
    {
        return $this->belongsToMany(Personal::class);
    }
}
