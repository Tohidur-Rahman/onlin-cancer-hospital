<?php

namespace App\Http\Controllers;

use App\Models\CancerType;
use App\Models\Contact;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{  
  public function index()
  {
      $disease = CancerType::all();
      return view('website.home', compact('disease'));
      
  }

  public function contact_store(Request $request)
  {
      
    $request->validate([
        'c_name' => ['required', 'string', 'max:200'],
        'c_email' => ['required', 'string', 'email', 'max:255'],
        'phone' => ['required', 'numeric','digits:11'],
        'subject' => ['required',],
        'msg' => ['required', ],
    ]);
    
      
      $contact=Contact::create([
        'c_name' => $request->c_name,
        'c_email' => $request->c_email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'msg' => $request->msg,
      ]);
      
      
        $notification = array(
          'message' => 'I will get back to you as soon as possible!',
          'alert-type' => 'success'
        );
      
        return redirect()->back()->with($notification);
  
      
  }

  public function contact_list()
  {
      $contacts = Contact::all();
      return view('admin.contact_list', compact('contacts'));
      
  }

  public function contact_view($id)
  {
      $contacts = Contact::findOrFail($id);
      return view('admin.contact_view', compact('contacts'));
      
  }
  public function contact_delete($id)
  {
      $contacts = Contact::findOrFail($id);
      $contacts->delete();
      
      $notification = array(
        'message' => 'Delete successfully!',
        'alert-type' => 'success'
      );
      
      return redirect()->back()->with($notification);
      
  }


}
