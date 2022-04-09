<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='admins';
    protected $fillable = [
        'Fullname', 'Username', 'Address', 'Phoneno', 'Password'
    ];
}
