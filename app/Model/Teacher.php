<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Language;
use App\Model\Student;

class Teacher extends Model
{

	protected $fillable = ['name', 'phone', 'email', 'language_id'];
    
    public function languages() {

    	return $this->hasMany(Language::class);

    }

    public function students() {

    	return $this->hasOne(Student::class);

    }

}
