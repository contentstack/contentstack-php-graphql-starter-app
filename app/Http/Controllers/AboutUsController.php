<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraphQL_Queries\AboutUsGraphQL;

class AboutUsController extends Controller
{
    public function index(){


        try {
            $client = Controller::stack_connection();
            $gql = AboutUsGraphQL::getAboutUsPageQuery();
            // Run query to get results
            $results = $client->runRawQuery($gql);
            $results->reformatResults(true);
            $items = $results->getData()['all_page']['items'];
            $home = $items[0];
            return view('aboutus', compact('home'));

        }
        catch (QueryError $exception) {

            // Catch query error and desplay error details
            print_r($exception->getErrorDetails());
            exit;
        }

       
    }
}
