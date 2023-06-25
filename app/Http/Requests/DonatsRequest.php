<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonatsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
