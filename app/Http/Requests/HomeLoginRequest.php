<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HomeLoginRequest extends Request
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
        return [
             "phone" => "required",
             "password" =>"required|between:6,15",            
        ];
    }
    
    public function messages() {
        return  [
             "phone.required" => "帐号不能为空",
             "password.required"=>"密码不能为空",
             "password.between"=>"密码长度应为6-15位",
            ];
    }
}
