<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Club;


use function Laravel\Prompts\password;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'role_id',
        'class',
        'email',
        'password',
    ];

    public function clubs()
    {
        return $this->belongsToMany(Club::class, 'club_form', 'club_id', 'form_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, "role_id");
    }
    
}
