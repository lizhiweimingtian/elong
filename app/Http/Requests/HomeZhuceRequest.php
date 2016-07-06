<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HomeZhuceRequest extends Request
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
            // 
            
             "nickname" => "required",
             "phone" => "required|unique:user|numeric",
             "password" =>"required|between:6,15",
             "repassword" => "required|same:password",
            
        ];
    }
    
    public function messages() {
        return  [
             "nickname.required" => "昵称未填写",
             "phone.required" => "手机号不能为空",
             "phone.unique" => "手机号已被使用",
             "phone.numeric" => "这不是手机号",
             "password.required"=>"密码不能为空",
             "password.between"=>"密码长度应为6-15位",
             "repassword.required"=>"确认密码不能为空",
             "repassword.same" => "两次输入的密码不一致",
            ];
    }
}
