<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{

    public function LocationsApi (Request $request, $call){ 
        
        $url = "https://www.universal-tutorial.com/api/";
        $token = "_sJrhBbZKEWeBaS4sxDRjWwaWG6oPy1CwlpwTl7YNZKjL36JWi0-FFHZj6l1icCmHYk";
        
        if($call == 1){
            $lib = "countries";
        } elseif ($call== 2){
            $country = 'Colombia';
            $lib = "states/".$country;
        } else {
            $state = 'Santander';
            $lib = "cities/".$state;
        }


        $getAuthToken = Http::withHeaders([
            "Accept" => "application/json",
            "api-token"=> $token,
            "user-email"=> "julianrodriguez19961@gmail.com"
        ])->get( $url.'getaccesstoken');

        $token = $getAuthToken->json('auth_token');

        $result = Http::withHeaders([
                "Authorization"=> "Bearer ". $token,
                "Accept"=> "application/json"
            ])->get( $url . $lib );

        return dd($result->json());

    } 

}
