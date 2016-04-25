<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DepartmentRequest extends Request {

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
			'txtDepartmentName' => 'required|unique:departments,name',
		];
	}

	public function messages() {
		return [
			'txtDepartmentName.required' => 'Please Enter Department Name',
			'txtDepartmentName.unique' => 'This Department Name Is Exists',
		];
	}

}
