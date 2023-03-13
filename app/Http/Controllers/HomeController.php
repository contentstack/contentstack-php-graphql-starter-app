<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GraphQL\Client;
use GraphQL\Exception\QueryError;
use GraphQL\Query;

use App\GraphQL_Queries\HomeGraphQL;

class HomeController extends Controller
{
    //
    public function index(){
        try {
            $client = Controller::stack_connection();
            $gql = HomeGraphQL::getHomePageQuery();
            // Run query to get results
            $results = $client->runRawQuery($gql);
            // Display part of the returned results of the object
            // print_r($results->getData()->all_page);
            // Reformat the results to an array and get the results of part of the array
            $results->reformatResults(true);
            $items = $results->getData()['all_page']['items'];

            $home = $items[0];
            return view('home', compact('home'));

        }
        catch (QueryError $exception) {

            // Catch query error and desplay error details
            print_r($exception->getErrorDetails());
            exit;
        }

            
    }
}
