<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\GetApiData;

class GetUserController extends Controller
{

    public function searchData()
    {
        return view('data.index');
    }

    public function getUsers(GetApiData $apiService, Request $request)
    {
        // $primary_api_url = env('PRIMARY_API_URL', 'https://randomuser.me/api/');
        // $fallback_api_url = env('FALLBACK_API_URL', 'https://www.boredapi.com/api/activity/');
        $getDataUserUrl = 'https://randomuser.me/api/';
        $secondUrl ='https://www.boredapi.com/api/activity/';

        $response = $apiService->getApiData($request,$getDataUserUrl, $secondUrl);
        return view('data.show', ['response'=>$response]);
    }
}
