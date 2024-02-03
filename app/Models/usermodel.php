<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class usermodel extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $guarded = ['role'];
    protected $fillable = [
        'username',
        'password',
        'email',
        'role',
    ];
    public $timestamps = false;
}
