<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHook extends Model
{
    use HasFactory; 
    protected $table = 'user';
    protected $fillable = [
        'username',
        'email',
        'id',
    ];
}
