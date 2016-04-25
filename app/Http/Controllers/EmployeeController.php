<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller {
	
	public function getList() {
		return view('admin.employee.list');
	}

	public function getAdd() {
		$department = Department::select('id', 'name')->get()->toArray();
		return view('admin.employee.add', compact('department'));
	}

	public function postAdd(EmployeeRequest $request) {
		$file_name = $request->file('fImages')->getClientOriginalName();
		$employee = new Employee;
		$employee->name = $request->txtEmployeeName;
		$employee->email = $request->txtEmployeeEmail;
		$employee->phone = $request->txtEmployeePhone;
		$employee->image = $file_name;
		$employee->user_id = 1;
		$employee->department_id = $request->txtDepartmentName;
		$request->file('fImages')->move('resources/upload/', $file_name);
		$employee->save();
	}

	public function getEdit() {

	}

	public function postEdit() {

	}
}
