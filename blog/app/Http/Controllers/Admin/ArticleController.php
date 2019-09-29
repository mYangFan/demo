<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
class ArticleController extends Controller
{
    public function index(){
        echo "index";
    }
    public function store(){
        echo "store";
    }
}
