<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\CancerType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $patient=Patient::count();
        $doctor=Doctor::count();
        $patients=Patient::all();
        $doctors=Doctor::all();
        $admin=User::count();
        return view('admin.home', compact('patient','patients','doctor','doctors','admin'));
    }

    // Disease

    public function disease_create()
    {
        return view('admin.add_disease');
    }

    public function disease_store(Request $request)
    {
        $request->validate([
            'disease' => ['required', 'string', 'unique:cancer_types'],
        ]);

        CancerType::create([
            'disease' => $request->disease,
        ]);

        $notification = array(
            'message' => 'Disease created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification); 
    }

    public function disease_view()
    {
        $disease = CancerType::all();
        return view('admin.all_disease', compact('disease'));
        
    }
    public function delete_disease($id)
    {
      $doctor=CancerType::findOrFail($id);
      $doctor->delete();
      
      $notification = array(
        'message' => 'Delete successfully!',
        'alert-type' => 'success'
      );
      
      return redirect()->back()->with($notification);

    }
    
    // Doctors
    public function create()
    {
        $disease = CancerType::all();
        return view('doctor.add_doctor', compact('disease'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:200'],
            'last_name' => ['required', 'string', 'max:200'],
            'gender' => ['required'],
            'birth' => ['required'],
            'number' => ['required','min:11|max:14'],
            'cancer_id' => ['required'],
            'address' => ['required'],
            'degree' => ['required'],
            'specialist' => ['required'],
            'image' => ['mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:doctors'],
            'password' => ['required',],
        ]);

        $imagename="";
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $imagename = time().'.'.$extention;
            $file->move('uploads/doctor',$imagename);
        }
       
         $doctor = Doctor::create([
            'cancer_id' => $request->cancer_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'birth' => $request->birth,
            'number' => $request->number,
            'address' => $request->address,
            'degree' => $request->degree,
            'specialist' => $request->specialist,
            'image' => $imagename,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $notification = array(
            'message' => 'Doctor created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
        
        
    }
    public function view_list()
    {   
        $doctors = Doctor::all();
        return view('doctor.doctor_list',compact('doctors'));
    }
    public function view_profile($id)
    {   
        $data=Doctor::findOrFail($id);
        return view('doctor.view_profile', compact('data'));
    }


    public function edit_profile($id)
    {
        $disease = CancerType::all();
        $data=Doctor::findOrFail($id);
        return view('doctor.edit_profile',compact('data','disease'));
    }

    
    public function update_profile(Request $request, $id)
    { 
        $request->validate([
            
          'first_name' => ['required', 'string', 'max:200'],
          'last_name' => ['required', 'string', 'max:200'],
          'number' => ['required','digits:11'],
          'address' => ['required'],
          'degree' => ['required'],
          'cancer_id' => ['required'],
          'specialist' => ['required'],
          'image' => ['mimes:jpeg,png,jpg,gif,svg|max:2048'],
          'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        $doctors=Doctor::findOrFail($id);
       
        $imagename = "";
        $deleteOldimage = 'uploads/doctor/'.$doctors->image;
        if($file=$request->file('image')){
            if(file_exists($deleteOldimage)){
                File::delete($deleteOldimage);
            }
            $extention = $file->getClientOriginalExtension();
            $imagename = time().'.'.$extention;
            $file->move('uploads/doctor',$imagename);

            
        }else{
            $imagename = $doctors->image;
        }
        $doctors->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'number' => $request->number,
            'address' => $request->address,
            'degree' => $request->degree,
            'specialist' => $request->specialist,
            'email' => $request->email,
            'cancer_id' => $request->cancer_id,
            'image' => $imagename,
        ]);

        $notification = array(
            'message' => 'Update successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }


    public function delete_doctor($id)
    {
      $doctor=Doctor::findOrFail($id);
      $doctor->delete();
      
      $notification = array(
        'message' => 'Delete successfully!',
        'alert-type' => 'success'
      );
      
      return redirect()->back()->with($notification);

    }


    //Patient Delete
    public function delete_patient($id)
    {
      $patient = Patient::findOrFail($id);
      $patient->delete();
      
      $notification = array(
        'message' => 'Delete successfully!',
        'alert-type' => 'success'
      );
      
      return redirect()->back()->with($notification);

    }


    //Assinged Doctor
    public function assigned_create($id)
    {
        $data=Patient::find($id);
        $doctors = Doctor::all();
        return view('doctor.assigned_doctor', compact('doctors','data'));
    }
    public function assigned_store(Request $request,$id)
    {
        $assign = Patient::find($id);
        $assign->update([
            'doctor_id' => $request->doctor_id,
        ]);
        $notification = array(
            'message' => 'Doctor Assigned successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('patient.list')->with($notification);
       
    }



}
