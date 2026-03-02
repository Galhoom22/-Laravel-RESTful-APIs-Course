<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use App\Helpers\ApiResponse;
use App\Http\Resources\DistrictResource;

class DistrictController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $city_id)
    {
        $districts = District::where('city_id', $city_id)->get();
        if(count($districts) > 0){
            return ApiResponse::sendResponse(200, 'Districts Retrieved Successfully', DistrictResource::collection($districts));
        }else{
            return ApiResponse::sendResponse(404, 'Districts Not Found', null);
        }
    }
}
