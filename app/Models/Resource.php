<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'status',
        'user_id',
        'club_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
    public function club()
    {
        return $this->belongsTo(Club::class, "club_id");
    }
}
