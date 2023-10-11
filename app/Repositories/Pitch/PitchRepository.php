<?php
namespace App\Repositories\Pitch;
interface PitchRepository
{
    public function all();
    public function store($requestData);
}
