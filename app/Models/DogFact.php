<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DogFact extends Model
{
    use HasFactory;
    protected $fillable =[
        'fact',
    ];
}
