<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisModel extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        'username',
        'password',
        'nama',
        'alamat',
        'no_telp',
        'no_sim',
        'role',
    ];
}
