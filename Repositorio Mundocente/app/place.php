<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
   protected $table = 'places';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
/*
    protected $fillable = [
        'id_place','name_place', 'type_place','type_entity','active_entity'
    ];

   /* public function rplaces()
    {
        return $this->hasOne(entity::class);
    }*/
}
