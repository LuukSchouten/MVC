<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klanten extends Model
{
    use HasFactory;

    protected $table = 'klanten';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'naam',
        'email',
        'password',
    ];
    
    public $timestamps = false;
}
