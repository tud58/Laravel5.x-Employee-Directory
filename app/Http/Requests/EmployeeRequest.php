<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployeeRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtDepartmentName' => 'required',
			'txtEmployeeName' => 'required|unique:employee,name',
			'fImages' => 'image',
			'EmployeeEmail' => 'regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
		];
	}

	public function messages() {
		return [
			'txtDepartmentName.required' => 'Please Choose Department',
			'txtEmployeeName.required' => 'Please Enter Employee Name',
			'txtEmployeeName.unique' => 'Employee Name Is Exists',
			'fImages.image' => 'This File Not Images',
			'txtEmail.regex' => 'Email Error Syntax'
		];
	}

}
