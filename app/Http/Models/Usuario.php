<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
