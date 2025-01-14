<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
    ];

    public function choices(){
        return $this->hasMany(Choice::class);
    }
}
