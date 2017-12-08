<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Teacher;

class Student extends Model
{

	protected $fillable = ['name', 'phone', 'email', 'teacher_id'];

    public function teachers() {

    	return $this->hasMany(Teacher::class);

    }

}
