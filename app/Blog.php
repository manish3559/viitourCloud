<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	public function blogUsers()
    {
    	return $this->hasOne('App\Blog', 'user_id', 'id');
    }
}
