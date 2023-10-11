<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pitch;
use App\Repositories\RouteRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    // private $route;

    // public function __construct(RouteRepository $routeRepository)
    // {
    //     $this->route = $routeRepository;
    // }

    public function fetchProductsList()
    {
        return Pitch::all();
    }

}
