<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function error($message='')
    {

        $error = [
            'code' => 100,
            'message' => $message
        ];

        return response()->json($error);

    }

    public function success($message='',$data=[])
    {

        $success = [
            'code' => 200,
            'message' => $message,
            'data' => $data
        ];

        return response()->json($success);

    }

    public function validate(Request $request, array $rules)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            header('Content-Type:  application/json');
            echo json_encode([
                'code' => 500,
                'message' => $validator->errors()->first(),
            ]);

            exit;

        }
    }

}
