<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    protected  $table = 'lugares';
    //public $timestamps = false;


    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   /* protected $attributes = [
        'id_lugar','nombre_lugar', 'tipo_lugar','id_ubicacion'
    ];

    /**
     * @param array $attributes
     * @return lugares
     */
    /*public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return array
     */
    /*{
        return $this->attributes;
    }
*/
}
