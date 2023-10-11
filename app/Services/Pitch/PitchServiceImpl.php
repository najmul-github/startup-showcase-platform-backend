<?php

namespace App\Services\Pitch;

use App\Repositories\Pitch\PitchRepository;

class PitchServiceImpl implements PitchService
{
    protected $pitch;

    public function __construct(PitchRepository $pitch)
    {
        $this->pitch = $pitch;
    }

    public function all(){
        return $this->pitch->all();
    }

    public function store($requestData)
    {
        return $this->pitch->store($requestData);
    }
}
