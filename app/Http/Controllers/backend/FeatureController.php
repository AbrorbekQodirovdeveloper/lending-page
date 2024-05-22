<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\features;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
public function featureView(){
    $features =features::get();
        return view('backend.feature.feature.view', compact('features'));
    }
public function featureAdd(){
        return view('backend.feature.feature.add');
    }
      public function featureStore(Request $request){
        $request->validate(
            [

                'name' => 'required',
                'about' => 'required',

            ],
            [

                'name.required' => 'Input name',
                'about.required' => 'Input about',

            ]
        );



        features::create([

            'name' => $request->name,
            'about' => $request->about,


        ]);


        $notification = array(
            'message' => 'Added succsesfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.feature')->with($notification);
    }
         public function featureEdit($id){
        $features = features::where('id', $id)->first();
        return view('backend.feature.feature.edit', compact('features'));
    }
 public function featureUpdate(Request $request, $id){
        $request->validate(
            [

                   'name' => 'required',
                   'about' => 'required',

            ],
            [

                'name.required' => 'Input name',
                'about.required' => 'Input about',

            ]
        );
        $features = features::where('id', $id)->first();


        $features->update([

               'name' => $request->name,
               'about' => $request->about,
        ]);


        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.feature')->with($notification);
    }
  public function featureDelete($id){
        $features = features::where('id', $id)->first();

        $features->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
