<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	protected $table = 'departments';

	protected $fillable = ['name', 'phone'];

	//public $timestamps = false;

	public function employee() {
		return $this->hasMany('App\Employee');
	}

}
