<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('pages.login');
    }

    // public function login(Request $request)
    // {
    //     $data = $request->only(['email','password']);
    
    //     $response = Http::post('http://172.168.102.134:7889/api/login',[
    //         'email' => $data['email'],
    //         'password' => $data['password']
    //     ]);
    
    //     $this->storeJwt($request, $result = json_decode ($response->body()));
    
    //     return redirect()->route('dashbord');
    // }
    
    // public function storeJwt(Request $request, $data)
    // {
    //         try {
    //             $token_enc = Crypt::encryptString($data->access_token);
    //             $request->session()->put(['token' => $token_enc, 'email' => $data->data->email, 'level'=> $data->date->level]);
    //         } catch (Exception $e) {
    //             return $e;
    //         }
    
    //         return true;
    // }
}
