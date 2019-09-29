<?php
/*
 * @Author: Yfan
 * @Date: 2019-09-23 11:34:37
 * @LastEditors: Yfan
 * @LastEditTime: 2019-09-28 21:27:47
 * @Description:
 */
namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;


class LoginController extends CommonController
{
    public function login(){
        if($input = Input::all()){
            if(!captcha_check($input['code'])){
              return back()->with('msg','验证码错误');
            }
            $user = User::first();
            if($user->user_name == $input['username'] && $user->user_pass == $input['password']){
                echo 'ok';
            }else{
               return back()->with('msg','用户名或者密码错误');
            }
        }else{
            return view('admin.login');
        }

    }
    public function crypt(){
        $str = "123456";
        $strp = 'eyJpdiI6InpkMURBVExZQlBVQXZBQ0dUVG51YlE9PSIsInZhbHVlIjoiaVJKRnVGVEtqS09HQk50K2Jhd1Vkdz09IiwibWFjIjoiMGZhZGE1YjJmYzQ0NmY3YmM2NGE2Njc4ZWJhNmQ1YTFiMDA2NDI2YzkwNWFmM2Q5MjdmNTdiYTk3ZjI2NzBmYyJ9';
         echo Crypt::decrypt($strp);

    }
}
