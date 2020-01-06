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

    public function messages() {
        return [
            'name.required' => '用户名不能为空',
            'name.min' => '姓名至少2个字符',
            'name.max' => '姓名至多12个字符',
            'password.required' => '密码不能为空',
            'password.min' => '密码至少5位',
            'password.max' => '密码至多60位',
        ];
    }


}
