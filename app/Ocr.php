<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocr extends Model
{
    protected $fillable = array('name', 'address', 'designation', 'email', 'phone', 'fax', 'vc_path', 'directory_id');
	protected $table    = 'ocrs';
    protected $guarded  = ['_token'];

    public function directory()
  	{
      return $this->belongsTo('App\Directory', 'directory_id');
  	}
  	public function getPhoto()
	{
	    if(!empty($this->vc_path) && \File::exists(storage_path($this->vc_path)))
	    {
	        // Get the filename from the full path
	        $filename = $this->vc_path;

	        return 'images/image.php?photo_url='.$filename;
	    }

	    return 'images/missing.jpg';
	}

}
