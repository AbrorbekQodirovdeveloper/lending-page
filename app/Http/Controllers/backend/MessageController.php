<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   public function message(){
     $contacts =   contact::get();
return view('backend.message.message' , compact('contacts'));
}

    public function contact(Request $request){
      contact::create([
    'fullname' => $request->fullname,
    'email' => $request->email,
    'message' => $request->message,
]);
      return redirect()->route('index');
}
  public function contactDelete($id){
        $contacts = contact::where('id', $id)->first();

        $contacts->delete();

        $notification = array(
            'message' => 'Add succsesfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
