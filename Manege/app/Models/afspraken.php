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

    //make a relation between the afspraken and the klanten table
    public function klanten()
    {
        return $this->belongsTo('App\Models\Klanten', 'klant_id');
    }

    //make a relation between the afspraken and the paarden table
    public function paarden()
    {
        return $this->belongsTo('App\Models\Paarden', 'paard_id');
    } 
}
