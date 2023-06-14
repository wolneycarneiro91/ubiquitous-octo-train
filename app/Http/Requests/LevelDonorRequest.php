<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelDonorRequest extends FormRequest
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
