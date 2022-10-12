<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class locationsApi extends Component
{

    public 
    $country,$state,$to,$apires,$size,$headerlib,$lib,
    $clasification = ['country','state','city'],
    $url = "https://www.universal-tutorial.com/api/", 
    $token = "_sJrhBbZKEWeBaS4sxDRjWwaWG6oPy1CwlpwTl7YNZKjL36JWi0-FFHZj6l1icCmHYk";


    /**
     * Create a new component instance.
     * @return void
     */

     public function __construct( $to='countries', $country = 'colombia', $state= 'Antioquia' , $default = '0' )
    {
        $this->to = $to;
        $this->country = $country;
        $this->state = $state;

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

        // $result = $items->json();
        $this->apires = $items->json();
        
        if ( $default == 0 ) {
            return $this->apires;
        }
    }

    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($borncountry);
        return view('components.locations-api');
    }

}
