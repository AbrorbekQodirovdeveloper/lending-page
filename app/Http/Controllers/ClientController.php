<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
       public function loginView(){
        return view('frontend.login');
    }
    public function client(){
      $client = Client::get();
        return view('client_view' , compact('client'));
    }


    public function registerclient(Request $request){

           Client::create([
                  'name' => $request->name,
                  'email' => $request->email,
                  'password' => Hash::make($request->password),
           ]);
           $client = Client::where('email' , $request->email)->first();
           Session::put('client' , $client);
                 return redirect()->route('index');
    }

//     public function loginclient(Request $request){
//         $client = Client::where('email' , $request->email)->first();
//         if($client &&  Hash::check( $request->password ,$client->password  ) ){
//             Session::put('client' , $client);

//             return redirect()->route('index');
//        }else {

//         return redirect()->route('client.register');

//       }
// }
 public function logoutclient(){
    Session::forget('client');

    return redirect()->route('index');

}
}
