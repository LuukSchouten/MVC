<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afspraken extends Model
{
    use HasFactory;

    protected $table = 'afspraken';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'klant_id',
        'paard_id',
        'datum',
    ];
    
    public $timestamps = false;
}
