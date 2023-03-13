<?php

namespace App\Http\Controllers;
//require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Contentstack\Contentstack;

use GraphQL\Client;
use GraphQL\Exception\QueryError;
use GraphQL\Query;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function stack_connection(){
                
        $client = new Client(
            "https://".env('CONTENTSTACK_HOST_NAME')."/stacks/".env('CONTENTSTACK_API_KEY')."?environment=".env('CONTENTSTACK_ENVIRONMENT'),
            ['access_token' => env('CONTENTSTACK_ACCESS_TOKEN')]
        );

        return $client;
    }

}
