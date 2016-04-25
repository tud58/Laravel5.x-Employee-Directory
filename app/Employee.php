<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

	protected $table = 'employees';

	protected $fillable = ['name', 'email', 'phone', 'image', 'user_id', 'department_id'];

	public function department() {
		return $this->belongTo('App\Department');
	}

	public function user() {
		return $this->belongTo('App\User');
	}

}
