<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $fillable = array('name');
	protected $table    = 'directories';
    protected $guarded  = ['_token'];
}
