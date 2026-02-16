<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Helpers\ApiResponse;

class SettingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $settings = Setting::find(5);
        if ($settings) {
            return ApiResponse::sendResponse(200, 'Settings retrived successfully', new SettingResource($settings));
        } else {
            return ApiResponse::sendResponse(404, "Settings not found", []);
        }
    }
}
