<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PitchResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'startup_id' => $this->startup_id ?? '',
            'description' => $this->description,
            'pitch_type' => $this->pitch_type,
            'video_url' => $this->video_url,
            'presentation_url' => $this->presentation_url,
            'created_at' => $this->created_at,
        ];
    }
}
