<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DomainResource;
use Illuminate\Http\Request;
use App\Models\Domain;

class DomainController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $domains = Domain::all();
        if(count($domains) > 0){
            return ApiResponse::sendResponse(200, 'Domains Retrieved Successfully', DomainResource::collection($domains));
        }
        return ApiResponse::sendResponse(200, 'Domains are empty', null); 
    }
}
