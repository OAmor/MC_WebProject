<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceStatus extends Controller
{
    //To verify the status of our server
    public function status(){
        try{
            return response()->json([
                'success' => true,
                'successMessageKey' => 'ServiceIsRunning',
            ],200);
        }catch (Exception $e){
            return response()->json([
                'success' => false,
                'successMessageKey' => 'ServiceError',
                'data' => $e->getMessage()
            ],500);
        }

    }
}


