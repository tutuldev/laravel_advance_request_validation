<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\str;


class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'useremail' => 'required|email',
            'userpass' => 'required|alpha_num|min:8',
            'userage' => 'required|numeric|min:13',
            'usercity' => 'required',
        ];
    }
    public function messages(){
        return [
            // "username.required"=>"User Name is required2!",
            "username.required"=>":attribute is required2!",
            "useremail.required"=>"User Email is required!",
            "useremail.email"=>"Enter the correct email address.",
            "userage.required"=>"User Age is required!",
            "userage.numeric"=>"User age MUst be numeric.",
             "userage.between"=>"User age MUst be 18 to 21 .",
            "usercity.required"=>"User City is required!",
        ];
    }
    // custom attributes
    public function attributes(){
      return [
        'username' => 'user Name2',
        'useremail' => 'provided email',
        'userpass' => 'User Pass',
        'userage' => 'User Age',
        'usercity' => 'UserCity',
      ];
    }
    // data modify
    protected function prepareForValidation(): void
    {
        $this->merge([
            // 'username' => strtoupper($this->username),
            'username' => Str::slug($this->username),
        ]);
    }

    // for when first errer then stop here not count blew error
    // protected $stopOnFirstFailure = true;
}
