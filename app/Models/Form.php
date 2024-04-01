<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\password;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        // 'club_id',
        // 'cin',
        'class',
        'email',
       'password',

    ];
}
