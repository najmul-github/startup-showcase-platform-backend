<?php
namespace App\Repositories\Pitch;

use App\Pitch;

class PitchRepositoryImpl implements PitchRepository
{
    public function all(){
        return Pitch::all();
    }

    public function store($requestData)
    {
        $pitch = new Pitch();
        $pitch->startup_id = $requestData['startup_id'];
        $pitch->description = $requestData['description'];
        $pitch->pitch_type = $requestData['pitch_type'];
        $pitch->video_url = $requestData['video_url'];
        $pitch->presentation_url = $requestData['presentation_url'];
        $pitch->save();

        return $pitch;
    }
}
