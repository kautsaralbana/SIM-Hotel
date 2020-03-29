<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'ms_provinces';

    protected $primaryKey = 'id_province';
    
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
