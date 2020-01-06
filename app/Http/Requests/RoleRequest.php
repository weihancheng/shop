<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST' :
                {
                    return [
                        'title' => 'required|unique:roles',
                        'name' => 'required|unique:roles'
                    ];
                }
            case 'PUT' :
                {
                    return [
                        'title' => 'required|unique:roles',
                        'name' => 'required|unique:roles'
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
            'name.required' => '角色标识不能为空',
            'name.unique' => '角色标识已存在',
            'title.required' => '角色名称不能为空',
            'title.unique' => '角色名称已存在',
        ];
    }
}
