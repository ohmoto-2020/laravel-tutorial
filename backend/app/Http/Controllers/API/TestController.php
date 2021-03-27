<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Model\Test;

class TestController extends Controller
{
    public function index()
    {
       try {
            $title = Test::first();
            $result = [
                'result'      => true,
                'title'     => $title->title,
                'naiyo' => $title->naiyo
            ];
        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
