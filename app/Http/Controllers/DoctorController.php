<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\CancerType;
use App\Models\Prescription;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class DoctorController extends Controller
{
    
    public function index()
    {   
        $doctor = Doctor::findOrFail(Auth::guard('doctor')->user()->id);
        $patients = $doctor->patient;
        return view('doctor.home', compact('patients'));
    }

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
            'number' => ['required','numeric','digits:11'],
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


    public function profile()
    {
        $data=Doctor::findOrFail(Auth::guard('doctor')->user()->id);
        return view('doctor.profile',compact('data'));
    }

    
    public function edit_profile($id)
    {
        $disease = CancerType::all();
        $data=Doctor::findOrFail(Auth::guard('doctor')->user()->id);
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
            'image' => $imagename,
        ]);

        $notification = array(
            'message' => 'Update successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }



    public function edit_password()
    {
        //$data=Doctor::findOrFail(Auth::guard('doctor')->user()->id);
        return view('doctor.edit_password');
    }
    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);

        $doctor=Auth::guard('doctor')->user();
        $currentPassword = Hash::check($request->current_password, $doctor->password);
        if($currentPassword){

            Doctor::findOrFail($doctor->id)->update([
                'password' => Hash::make($request->password),
            ]);

            $notification = array(
                'message' => 'Password Update Successfully!',
                'alert-type' => 'success'
            );
            
            return redirect()->back()->with($notification);

        }else{
           
            return redirect()->back()->with('status','Current Password does not match!');
        }



        
    }


    // Patient List
    public function patient_list()
    {
        $doctor = Doctor::findOrFail(Auth::guard('doctor')->user()->id);
        $patients = $doctor->patient;

        
        return view('doctor.patient_list', compact('patients'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports($id)
    {   
        $patient=Patient::findOrFail($id);
        $patient_report = $patient->patient_report;
        return view('doctor.patient_reports',compact('patient_report','patient'));
    }
     /**
     * Activities
     */
    public function activities($id)
    {   
        $patient=Patient::findOrFail($id);
        $patient_activities = $patient->patient_activities;
        return view('doctor.patient_activities',compact('patient_activities'));
    }
    public function view_prescription($id)
    {   
        $date=Carbon::now();
        $data=Patient::find($id); 
        return view('doctor.patient_prescription', compact('data','date'));
    }
    public function create_prescription($id)
    {   
        $date=Carbon::now();
        $data=Patient::find($id); 
        return view('patient.create_prescription', compact('data','date'));
    }

    public function store_prescription(Request $request,$id)
    {   
           
        $patient_id = Patient::find($id);

        
        $medicine = $request->medicine;
        $strength = $request->strength;
        $dose = $request->dose;
        $advice = $request->advice;
        $duration = $request->duration;

        for($i=0; $i < count((array)$medicine); $i++){
           
           Prescription:: create([
            'patient_id'   =>$patient_id->id,
                'medicine'   => $medicine[$i],
                'strength'   => $strength[$i],
                'dose'       => $dose[$i],
                'advice'     => $advice[$i],
                'duration'   => $duration[$i],
            ]);

        }
        $notification = array(
            'message' => 'Prescription Create successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);

        
       
    }

    public function edit_prescription($id)
    {   
        
        $data=Prescription::find($id);
        return view('patient.edit_prescription', compact('data'));
    }
    public function update_prescription(Request $request,$id)
    {   
           
        $prescription=Prescription::find($id);
        $prescription->update([
                'medicine'   => $request->medicine,
                'strength'   => $request->strength,
                'dose'       => $request->dose,
                'advice'     => $request->advice,
                'duration'   => $request->duration,
            ]);

            $notification = array(
                'message' => 'Prescription update successfully!',
                'alert-type' => 'success'
            );
           
            return redirect(route('doctor.patient.create_prescription',$prescription->patient->id))->with($notification);
       
    }

    //Patient Delete
    public function delete_prescription($id)
    {
      $prescription = Prescription::findOrFail($id);
      $prescription->delete();
      
      $notification = array(
        'message' => 'Delete successfully!',
        'alert-type' => 'success'
      );
      
      return redirect()->back()->with($notification);

    }



}
