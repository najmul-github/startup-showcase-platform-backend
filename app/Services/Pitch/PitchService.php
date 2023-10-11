<?php
namespace App\Services\Pitch;
interface PitchService
{
    public function all();
    public function store($requestData);
}
