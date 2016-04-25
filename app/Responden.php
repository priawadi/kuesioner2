<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    // protected $fillable = ['name'];
    protected $table = 'responden';
    protected $primaryKey = 'id_responden';
}
