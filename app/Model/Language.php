<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Teacher;

class Language extends Model
{
    
	protected $fillable = ['name'];
    
	public function teachers() {

		return $this->hasOne(Teacher::class);

	}

}
