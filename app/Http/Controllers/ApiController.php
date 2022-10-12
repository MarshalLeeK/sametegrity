<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{

    public $country,$lib,$state,$to,$items,$size,$headerlib,
    $clasification = ['country','state','city'],
    $url = "https://www.universal-tutorial.com/api/", 
    $token = "_sJrhBbZKEWeBaS4sxDRjWwaWG6oPy1CwlpwTl7YNZKjL36JWi0-FFHZj6l1icCmHYk";

    /**
     * Create a new component instance.
     * @return void
     */

     public function index(){
        // $this->to = $to;
        // $this->country = $country;
        // $this->state = $state;
        $to = 'countries'; 
        $country = 'colombia'; 
        $state = 'Antioquia' ; 
        $default = '0';

        if ( $to == 'cities' ){
            $headerlib = $this->clasification[2];
            $lib = $to."/".$state;
        };
        if ( $to == 'states' ){
            $lib = $to."/".$country;
            $headerlib = $this->clasification[1];

        };
        if ( $to == 'countries'){
            $lib = $to;
            $headerlib = $this->clasification[0];
        }

        $this->lib = $lib;
        $this->headerlib = $headerlib;

        $getAuthToken = Http::withHeaders([
            "Accept" => "application/json",
            "api-token"=> $this->token,
            "user-email"=> "julianrodriguez19961@gmail.com"
        ])->get( $this->url.'getaccesstoken');

        $token = $getAuthToken->json('auth_token');

        $items = Http::withHeaders([
            "Authorization"=> "Bearer ". $token,
            "Accept"=> "application/json"
        ])->get( $this->url . $lib );

        $result = $items->json();
        dd($result);
        // $this->items = $items->json();
        
        // return $this->items;
    }
}
