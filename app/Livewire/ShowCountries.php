<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShowCountries extends Component
{

    public $countriesResponse;
    public $statesResponse;
    public $token_auth;
    public $countries;




    public function render()
    {
        return view('livewire.show-countries');
    }

    public function mount($countriesResponse)
    {
        //---------------------SE AGREGA API QUE CARGA DATOS DE LOS PAISES-------------------------///

        $url='https://www.universal-tutorial.com/api/';
        $url_countries='https://www.universal-tutorial.com/api/countries/';
        $token_api = "35Bx6GtadlB1nzrNGYWvdXfsgTWTGCdyDMc4gfUDuzziizF2qJ2p06IPx8TRbyKPPk8";
        $user_email="sameinprogramador@gmail.com";

           $response = Http::withHeaders([
           "Accept"=> "application/json",
           "api-token"=> $token_api,
           "user-email"=> $user_email
           ])->withoutVerifying()->get($url.'getaccesstoken');

            $this->token_auth=$response->json('auth_token');


       $countries = Http::withHeaders([
       "Authorization"=> "Bearer ".$this->token_auth,
       "Accept"=> "application/json"
       ])->withoutVerifying()->get($url_countries);

       $countriesResponse = $countries->json();

       //------------------FIN DE API QUE CARGA LOS PAISES-------------------------//
    }

    public function getStates()
    {
    
        $url_states='https://www.universal-tutorial.com/api/states/Colombia';
         $states = Http::withHeaders([
             "Authorization"=> "Bearer ".$this->token_auth,
             "Accept"=> "application/json"
         ])->withoutVerifying()->get($url_states);

         $this->statesResponse = $states->json();
    }
}
