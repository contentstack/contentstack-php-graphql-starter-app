<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraphQL_Queries\ContactUsGraphQL;

class ContactUsController extends Controller
{
    public function index(){
        
      try {
        $client = Controller::stack_connection();
        $gql = ContactUsGraphQL::getContactUsPageQuery();
        // Run query to get results
        $results = $client->runRawQuery($gql);
        $results->reformatResults(true);
        $items = $results->getData()['all_page']['items'];
        $home = $items[0];
        return view('contactus', compact('home'));  
      }
      catch (QueryError $exception) {
          // Catch query error and desplay error details
          print_r($exception->getErrorDetails());
          exit;
      }
    }
}
