<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller{
    public function index(){
        // $pdo = DB::connection()->getPdo();
        // dd($pdo);
        // $users = DB::table('user')->get();
        // $data['data'] = [];
        // $data['data'] = $users;
        // dd(json_encode($data));

    }

    public function login(){
        phpinfo();
    }
}
