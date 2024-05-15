<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'president',
        'image',
        'date'

    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'club_user')->withPivot('club_id','user_id');
    }

    public function forms()
    {
        return $this->belongsToMany(Form::class,'club_form','form_id','club_id');
    }


}
