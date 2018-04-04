<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Country extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $hidden = [];




    /*
    |--------------------------------------------------------------------------
    | Relations,
    |--------------------------------------------------------------------------*/

    public function users(){
        return $this->hasMany(User::class);
    }
    
    public function cities(){
        return $this->hasMany(City::class);
    }

    public function getCountryNames(){
        $queryBuilder = $this
            ->paginate('3');
        return $queryBuilder;
    }


}
