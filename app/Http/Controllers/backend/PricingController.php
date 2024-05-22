<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
        public function pricingView(){
        $pricings =Pricing::get();
        return view('backend.pricing.pricingview', compact('pricings'));
    }
public function pricingAdd(){
        return view('backend.pricing.pricingadd');
    }
      public function pricingStore(Request $request){
        $request->validate(
            [

                'name' => 'required',
                'title' => 'required',
                'price' => 'required',
            ],
            [

                'name.required' => 'Input name',
                'title.required' => 'Input title',
                'price.required' => 'Input price',
            ]
        );



        Pricing::create([

            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,

        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.pricing')->with($notification);
    }
         public function pricingEdit($id){
        $pricings = Pricing::where('id', $id)->first();
        return view('backend.pricing.pricingedit', compact('pricings'));
    }
 public function pricingUpdate(Request $request, $id){
        $request->validate(
            [

                   'name' => 'required',
                   'title' => 'required',
                   'price' => 'required',
            ],
            [

                'name.required' => 'Input name',
                'title.required' => 'Input title',
                'price.required' => 'Input price',
            ]
        );
        $pricings = Pricing::where('id', $id)->first();


        $pricings->update([

               'name' => $request->name,
               'title' => $request->title,
               'price' => $request->price,

        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.pricing')->with($notification);
    }
  public function pricingDelete($id){
        $pricings = Pricing::where('id', $id)->first();
        // unlink($product_colors->image);
        $pricings->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
