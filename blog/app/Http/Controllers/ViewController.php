<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function index(){
        $data = [
            'score' => '100',
            'article'=>[
                'news1',
                'news2',
                'news3',
                'news4',
                'news5'
            ],
            'news'=>[],
        ];
        return view("my_laravel",compact('data'));
    }

    public function article(){
        echo config('database.connections.mysql.prefix');
        return view("article");
    }
     public function pangpang(){
         $data = "什么时候去健身";
         return view("my_laravel",compact('data'));
     }
}
