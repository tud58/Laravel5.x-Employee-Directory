<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller {

	public function getList() {
		return view('admin.user.list');
	}

	public function getAdd() {
		return view('admin.user.add');
	}

	public function postAdd(UserRequest $request) {

	}

	public function getEdit() {

	}

	public function postEdit() {

	}

	public function getDelete() {

	}
}
