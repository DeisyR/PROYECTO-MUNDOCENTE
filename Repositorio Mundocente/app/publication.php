<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    //
    protected $table = 'publications';

    protected $fillable = [
        'id_publication',
        'start_date',
        'final_date',
    ];


}


















