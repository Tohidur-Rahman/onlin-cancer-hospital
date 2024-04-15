<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CancerType;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function index(){
        $users = User::all();
        return view('admin.alluser',compact('users'));
    }

    public function create()
    {
        return view('admin.adduser');
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $notification = array(
            'message' => 'User created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }



    public function edit($id){
        $users = User::findOrFail($id);
        return view('admin.edituser', compact('users'));
    }

    public function view($id){
        $users = User::findOrFail($id);
        return view('admin.viewuser', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
        ]);
        $users=User::findOrFail($id);
       
        $users->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $notification = array(
            'message' => 'Update successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('admin.user')->with($notification);
    }

    public function delete($id)
    {
      $users=User::findOrFail($id);
      $users->delete();
      
      $notification = array(
        'message' => 'Delete successfully!',
        'alert-type' => 'success'
      );
      
      return redirect()->back()->with($notification);

    }


    

}
