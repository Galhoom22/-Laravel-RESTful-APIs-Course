<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewMessageRequest;
use App\Models\Message;
use App\Helpers\ApiResponse;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(NewMessageRequest $request)
    {
        $data = $request->validated();
        $record = Message::create($data);
        if($record){
            return ApiResponse::sendResponse(201, 'Sent Successfully', null);
        }
    }
}
