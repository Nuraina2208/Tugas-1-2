<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
     protected $table='Pengumuman';

    	protected $fillable=['nama','user_id'];
    	
    	protected $casts=[];
}
