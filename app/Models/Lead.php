<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'requests';
    
    protected $fillable = [
        'name',
        'phone',
        'email',
        'comment',
        'attachment',
        'attachment_name',
    ];
}
