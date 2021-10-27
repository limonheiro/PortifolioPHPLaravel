<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;
use GuzzleHttp\Client;

class newsController extends Controller
{
    public function getNewsHome(){
        // ['title', 'description', 'url', 'urlToImage']
        $res = Http::get('https://newsapi.org/v2/everything', [
            'language'=>'pt',
            'q'=>'bitcoin',
            'apiKey'=>'3d44c4ffc306479bb19b1bd0c7f45460'
        ]);
        $status = $res->status();
        $body = $res->json();
        // foreach($body['articles'] as $a){
        //     var_dump($a);
        // }
        

        return view('bitcoin',['status'=>$status, 'body'=>$body]);
    }

    public function getNews($assunto){
        // ['title', 'description', 'url', 'urlToImage']
        $res = Http::get('https://newsapi.org/v2/everything', [
            'language'=>'pt',
            'q'=>"{$assunto}",
            'apiKey'=>'3d44c4ffc306479bb19b1bd0c7f45460'
        ]);
        $status = $res->status();
        $body = $res->json();
        // foreach($body['articles'] as $a){
        //     var_dump($a);
        // }
        

        return view('getnew',['status'=>$status, 'body'=>$body]);
    }
}
