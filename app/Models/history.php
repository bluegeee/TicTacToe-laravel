<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    protected $table = 'history';
    protected $primaryKey = 'id';
    protected $fillable = [
        'player',
        'status',
        'step',
        'position',
        'date',
        'size_table'
    ];
}
