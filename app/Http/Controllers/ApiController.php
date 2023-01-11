<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{

    public $lib, $to, $items, $size, $headerlib,
        $categories = array('state', 'city'),
        $url = "https://www.universal-tutorial.com/api/",
        $token = "_sJrhBbZKEWeBaS4sxDRjWwaWG6oPy1CwlpwTl7YNZKjL36JWi0-FFHZj6l1icCmHYk";

    /**
     * Create a new component instance.
     * @return void
     */

    public function index(Request $request)
    {

        $inputId = $request->id;
        $value = $request->parentValue;
        $categories = $this->categories;

        $field = explode('-', $inputId)[0];
        $category = explode('-', $inputId)[1];

        $to = mb_substr($category, -1) == 'y' ? str_replace('y', 'ies', $category) : $category . 's';
        $headerlib = $category;

        if (in_array($category, $categories)) {
            $lib = $to . "/" . $value;
        };
        if (!in_array($category, $categories)) {
            $lib = $to;
        }

        $getAuthToken = Http::withHeaders([
            "Accept" => "application/json",
            "api-token" => $this->token,
            "user-email" => "julianrodriguez19961@gmail.com"
        ])->get($this->url . 'getaccesstoken');

        $token = $getAuthToken->json('auth_token');

        $items = Http::withHeaders([
            "Authorization" => "Bearer " . $token,
            "Accept" => "application/json"
        ])->get($this->url . $lib);

        return $items;
    }
}
