<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

use App\Models\features;
use App\Models\Main;
use App\Models\Pricing;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
       $client = Session::get('client');
       $mains = Main::first();
       $pricings = Pricing::get();
       $features = features::get();
      return view('frontend.index' , compact('client' ,'pricings', 'features', 'mains'));
}
}
