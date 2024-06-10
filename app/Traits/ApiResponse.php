<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponse
{
    public function retrieveResponse($status = true, $message = null, mixed $data = null, $code = Response::HTTP_OK)
    {
        return $this->responseHandle(status: $status, message: $message, data: $data, code: $code);
    }

    private function responseHandle(bool $status, mixed $data = null, string $message = null, int $code)
    {
        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data?->response()->getData(true),
        ];
        return response($response, $code);
    }


    public function sendResponse($code, $data = [])
    {
        // ...
    }
}
