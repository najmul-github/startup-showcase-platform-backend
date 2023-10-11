<?php

namespace App\Http\Requests;

use App\utils\pitchType;
use Illuminate\Foundation\Http\FormRequest;

class CreatePitchRequest extends FormRequest
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
            'startup_id' => 'required',
            'description' => 'required',
            'pitch_type' => 'required|in:' . pitchType::INSTITUTIONAL . ',' . PitchType::CROWDFUNDING,
            'pitch_type' => 'required',
            'video_url' => 'required',
            'presentation_url' => 'required'
        ];
    }
}
