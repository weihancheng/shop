<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnterRequest extends FormRequest
{
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
        switch ($this->route()->getName()) {
			case 'admin.login' :
				{
					return [
						'name' => 'required|max:12|min:2',
						'password' => 'required|max:60|min:5'
					];
				}
			default:
				{
					return [];
				}
		}
    }
}
