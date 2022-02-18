<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paarden extends Model
{
    use HasFactory;

    protected $table = 'paarden';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'naam',
        'schofthoogte',
        'gebruik',
        'lvh'
    ];
    
    public $timestamps = false;
}
