<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
    public function index(){
        $ads = Ad::latest()->paginate();
        if(count($ads) > 0){
            return ApiResponse::sendResponse(200, 'Ads Retrieved Successfully', $ads);
        }
        return ApiResponse::sendResponse(404, 'Ads Not Found', null);
    }
}
