<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraphQL_Queries\BlogGraphQL;

class BlogController extends Controller
{
    public function index(){

      try {
        $client = Controller::stack_connection();
        $gql = BlogGraphQL::getBlogPageQuery();
        $archived_false = BlogGraphQL::getBlogArchivedFalseQuery();
        $archived_true = BlogGraphQL::getBlogArchivedTrueQuery();


        // Run query to get results
        $results = $client->runRawQuery($gql);
        // Display part of the returned results of the object
        // print_r($results->getData()->all_page);
        // Reformat the results to an array and get the results of part of the array
        $results->reformatResults(true);
        $items = $results->getData()['all_page']['items'];
        $blog = $items[0];

        $results = $client->runRawQuery($archived_true);
        $results->reformatResults(true);
        $result = $results->getData()['all_blog_post']['items'];


        $results = $client->runRawQuery($archived_false);
        $results->reformatResults(true);
        $home = $results->getData()['all_blog_post']['items'];

        return view('blog', compact('home','result','blog'));  

      }
      catch (QueryError $exception) {

          // Catch query error and desplay error details
          print_r($exception->getErrorDetails());
          exit;
      }
       
    }

    public function show($id){
        
      try {
        $client = Controller::stack_connection();
        $gql = BlogGraphQL::getBlogPageQuery();

        $base_url = $base_url = "/blog/".$id;
        $blog_entry_gql = BlogGraphQL::getBlogEntry($base_url);
        

        $results = $client->runRawQuery($gql);
        $results->reformatResults(true);
        $items = $results->getData()['all_page']['items'];
        $blog = $items[0];

        $results = $client->runRawQuery($blog_entry_gql);
        $results->reformatResults(true);
        $items = $results->getData()['all_blog_post']['items'];
        $blog_entry = $items[0];

        $related_post = $blog_entry["related_postConnection"];

        return view('blog_show', compact('blog_entry','related_post','blog'));    

      }
      catch (QueryError $exception) {

        // Catch query error and desplay error details
        print_r($exception->getErrorDetails());
        exit;
      }
       

    }
}
