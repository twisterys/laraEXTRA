<?php

namespace App\Http\Requests;

use App\Models\Mission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMissionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mission_edit');
    }

    public function rules()
    {
        return [
            'objet' => [
                'string',
                'required',
            ],
            'start_at' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'end_at' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
