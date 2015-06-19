<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateFinishedDesignRequest extends Request
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
            'h1'        =>'min:2',
            'h2'        =>'min:2',
            'h3'        =>'min:2',
            'h4'        =>'min:2',
            'h5'        =>'min:2',
            'h6'        =>'min:2',
            'h7'        =>'min:2',
        ];
    }
}
