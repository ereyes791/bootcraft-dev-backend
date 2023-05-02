<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mision;
use \Illuminate\Http\JsonResponse;

class MisionController extends Controller
{
    //
    public function index(): JsonResponse
    {
        $mision = Mision::all();
        $misionmapping = $mision->map(function ($mision) {
            return [
                $mision,
                $mision->objectives
            ];
        });

        return response()->json($misionmapping);
    }
}
