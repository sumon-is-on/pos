<?php
namespace App\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class RoleFormRequest extends FormRequest{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required',
            'permission_ids' => 'required',
        ];
        return $rules;
        

    }
}