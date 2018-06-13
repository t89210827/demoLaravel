<?php

namespace App\Http\Controllers\api;

use App\Components\ADManager;
use App\Components\RequestValidator;
use App\Http\Controllers\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class recommendController extends Controller
{
    /*
    * 小程序推荐轮播图
    *
    * By Acker
    *
    *  2018-06-13
    *
    */
    public function getADs(Request $request)
    {
        $data = $request->all();
        //合规校验position
//        $requestValidationResult = RequestValidator::validator($request->all(), [
//            'position' => 'required',
//        ]);
//        if ($requestValidationResult !== true) {
//            return ApiResponse::makeResponse(false, $requestValidationResult, ApiResponse::MISSING_PARAM);
//        }
        $ads = ADManager::getADs(["1"]);
        return ApiResponse::makeResponse(true, $ads, ApiResponse::SUCCESS_CODE);
    }
}
