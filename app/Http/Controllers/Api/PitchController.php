<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePitchRequest;
use App\Http\Resources\PitchResource;
use App\Http\Responses\ApiFailureResponse;
use App\Http\Responses\ApiStoreSuccessResponse;
use App\Services\Pitch\PitchService;
use App\Http\Responses\ApiSuccessResponse;

class PitchController extends Controller
{
    protected $pitch;

    public function __construct(PitchService $pitch)
    {
        $this->pitch = $pitch;
    }
    
    public function fetchPitches()
    {
        $pitches = $this->pitch->all();
        
        return response()->json(ApiSuccessResponse::success('Pitches', PitchResource::collection($pitches)));
    }

    function store(CreatePitchRequest $request) 
    {
        $pitch = $this->pitch->store($request->all());

        if(!$pitch){ return response()->json(ApiFailureResponse::fail('Pitch could not be saved', $pitch));}

        return response()->json(ApiStoreSuccessResponse::success('Pitch stored successfully', $pitch));
    }
}
