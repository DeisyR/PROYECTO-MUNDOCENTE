<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entity extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
*/
    protected $fillable = [
        'id_entity','name_entity', 'phone_entity','type_entity','state_entity'
    ];

    public function rentity()
    {
        return $this->hasOne(place::class);
    }
}
