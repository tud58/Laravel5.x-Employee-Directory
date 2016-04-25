<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\DepartmentRequest;
use App\Department;

class DepartmentController extends Controller {

	public function getList() {
		$data = Department::select('id', 'name', 'phone')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.department.list', compact('data'));
	}

	public function getAdd() {
		return view('admin.department.add');
	}

	public function postAdd(DepartmentRequest $request) {
		$department = new Department;
		$department->name = $request->txtDepartmentName;
		$department->phone = $request->txtDepartmentPhone;
		$department->save();
		return redirect()->route('admin.department.list')->with(['flash_level'=>'success', 'flash_message'=>'Success !! Complete Add Department']);
	}

	public function getDelete($id) {
		$department = Department::find($id);
		$department->delete($id);
		return redirect()->route('admin.department.list')->with(['flash_level'=>'success', 'flash_message'=>'Success !! Complete Delete Department']);
	}

	public function getEdit($id) {
		$data = Department::find($id)->toArray();
		return view('admin.department.edit',compact('data'));
	}

	public function postEdit(Request $request, $id) {
		$this->validate($request, 
			["txtDepartmentName" => "required"],
			["txtDepartmentName.required" => "Please Enter Department Name"]
			);
		$department = Department::find($id);
		$department->name = $request->txtDepartmentName;
		$department->phone = $request->txtDepartmentPhone;
		$department->save();
		return redirect()->route('admin.department.list')->with(['flash_level'=>'success', 'flash_message'=>'Success !! Complete Delete Department']);
	}

}
