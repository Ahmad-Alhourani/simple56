<?php
namespace App\Http\Requests\Backend\Test2;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class CreateTest2 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
        //   return Gate::allows('admin.test2.edit', $this->test2);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'id' => 'None',

            'name' => 'required',

            'l_name2' => 'nullable',

            'l_name' => 'nullable',

            'email' => 'required',

            'sms' => 'nullable'
        ];
    }
}
