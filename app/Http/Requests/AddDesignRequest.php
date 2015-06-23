<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddDesignRequest extends Request
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
            'title'         =>'min:2',
            'url_img'       =>'image',
            'description'   =>'min:2',
            'catalog_id'    =>'integer',
            'id'            =>'integer'
        ];
    }
}
