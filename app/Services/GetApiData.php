<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetApiData
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function getApiData(Request $request, string $getDataUserUrl, string $secondUrl)
    {
        if($request->result){
            $getDataUserUrl .= '?results='.$request->result;
        }
        if ($request->nation) {
            $getDataUserUrl .= '&&nat='.$request->nation;
        }
        if ($request->seeds) {
            $getDataUserUrl .= '&&seed='.$request->seeds;
        }
        $responseData = Http::get($getDataUserUrl);

        $getData = true;

        if( $responseData->status() == 200 )
        {
            $userJsonData = $responseData->json();

            if( !isset($userJsonData['error']) )
            {
                $arrUser = [];

                if( !empty($userJsonData['results']) )
                {
                    foreach ($userJsonData['results'] as $data) {
                        $arrUser[] = [
                            'gender' => $data['gender'],
                            'name' => $data['name'],
                            'address' => $data['location'],
                            'email_id' => $data['email'],
                            'dob' => $data['dob']['date'],
                            'age' => $data['dob']['age'],
                            'registration_date' => $data['registered']['date'],
                            'phone' => $data['phone'],
                            'cell' => $data['cell'],
                            'profile_pictures' => $data['picture'],
                        ];
                    }
                }

               $users = $arrUser;
            }
            else
            {
                $getData = false;
            }

        } else {
            $getData = false;
        }

        if($getData){
            return  $users;
        }

        if( !$getData )
        {
            $secondResponse = Http::get($secondUrl);
            if( $secondResponse->status() == 200 )
            {
                $activityJsonData = $secondResponse->json();
                return $activityJsonData;
            }
        }

        return json_encode(['no_data' => true]);
    }
}