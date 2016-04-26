<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enumerator extends Model
{
    protected $table = 'enumerator';
    protected $dates = ['tanggal_wawancara', 'tanggal_editing'];

    public function getDates()
	{
	    /* substitute your list of fields you want to be auto-converted to timestamps here: */
	    return array('created_at', 'updated_at', 'deleted_at', 'tanggal_wawancara', 'tanggal_editing');
	}
}
