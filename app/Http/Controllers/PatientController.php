<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\CancerType;
use Illuminate\Http\Request;
use App\Models\PatientReport;
use App\Models\PatientActivites;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\BillSystem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    
    public function index()
    {
        return view('patient.home');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:200'],
            'last_name' => ['required', 'string', 'max:200'],
            'gender' => ['required'],
            'age' => ['required','min:2'],
            'blood' => ['required'],
            'number' => ['required','numeric','digits:11'],
            'cancer_id' => ['required'],
            'address' => ['required'],
            'description' => ['required'],
            'image' => ['required','mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:patients'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required'],
        ]);

        $imagename="";
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $imagename = time().'.'.$extention;
            $file->move('uploads/patient',$imagename);
        }
        
         $patient = Patient::create([
            'cancer_id' => $request->cancer_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'age' => $request->age,
            'blood' => $request->blood,
            'number' => $request->number,
            'address' => $request->address,
            'description' => $request->description,
            'image' => $imagename,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       
        $notification = array(
            'message' => 'Admitted successfully!',
            'alert-type' => 'success'
        );
        
        return redirect(route('patient.login'))->with($notification);
  
    }
    public function edit_profile($id)
    {
        $data=Patient::findOrFail($id);
        return view('patient.edit_profile',compact('data'));
    }

    
    public function update_profile(Request $request, $id)
    {   

        $request->validate([
            'first_name' => ['required', 'string', 'max:200'],
            'last_name' => ['required', 'string', 'max:200'],
            'age' => ['required','min:2'],
            'number' => ['required','numeric','digits:11'],
            'address' => ['required'],
            'description' => ['required'],
            'image' => ['mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'email' => ['required', 'string', 'email', 'max:255',],
        ]);

        $patient=Patient::findOrFail($id);
        

        $imagename = "";
        $deleteOldimage = 'uploads/patient/'.$patient->image;
        if($file=$request->file('image')){
            if(file_exists($deleteOldimage)){
                File::delete($deleteOldimage);
            }
            $extention = $file->getClientOriginalExtension();
            $imagename = time().'.'.$extention;
            $file->move('uploads/patient',$imagename);

            
        }else{
            $imagename = $patient->image;
        }
        
        $patient->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'number' => $request->number,
            'address' => $request->address,
            'description' => $request->description,
            'image' => $imagename,
            'email' => $request->email,
        ]);
       
        $notification = array(
            'message' => 'Update successfully!',
            'alert-type' => 'success'
        );
        
        return redirect(route('patient.dashboard'))->with($notification);
    }

    public function details($id)
    {
        $data=Patient::findOrFail($id);
        return view('patient.patient_details',compact('data'));
    }
    
    public function list()
    {
        $patients = Patient::all();
        return view('patient.patient_list',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report_create()
    {   
        $patient= Patient::findOrFail(Auth::guard('patient')->user()->id);
        $patient_report = $patient->patient_report;
        return view('patient.reports',compact('patient_report'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activities_create()

    {   
        return view('patient.add_activities');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activities_index()
    {   
        $patient= Patient::findOrFail(Auth::guard('patient')->user()->id);
        $patient_activities = $patient->patient_activities;
        return view('patient.daily_activities',compact('patient_activities'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activities_store(Request $request)
    {   
        $request->validate([
            'heart_rate' => ['required'],
            'fever' => ['required'],
            'glucose' => ['required'],
            'upperblood' => ['required'],
            'lowerblood' => ['required'],
            'bloodcount' => ['required'],
            'weight' => ['required'],
            'height' => ['required'],
            'smoking' => ['required'],
            'lungs' => ['required'],
            'stomach' => ['required'],
            'liver' => ['required'],
            'heart' => ['required'],
            'brain' => ['required'],
            'oxygen' => ['required'],
            'carbon' => ['required'],
            'hydrogen' => ['required'],
            'nitrogen' => ['required'],
            'calcium' => ['required'],
            'other' => ['required'],
        ]);

        $patient= Patient::findOrFail(Auth::guard('patient')->user()->id);
        $patient_activities = PatientActivites::create([
            'patient_id' => $patient->id,
            'heart_rate' => $request->heart_rate,
            'fever' => $request->fever,
            'glucose' => $request->glucose,
            'upperblood' => $request->upperblood,
            'lowerblood' => $request->lowerblood,
            'bloodcount' => $request->bloodcount,
            'weight' => $request->weight,
            'height' => $request->height,
            'smoking' => $request->smoking,
            'lungs' => $request->lungs,
            'stomach' => $request->stomach,
            'liver' => $request->liver,
            'heart' => $request->heart,
            'brain' => $request->brain,
            'oxygen' => $request->oxygen,
            'carbon' => $request->carbon,
            'hydrogen' => $request->hydrogen,
            'nitrogen' => $request->nitrogen,
            'calcium' => $request->calcium,
            'other' => $request->other,
        ]);
        $notification = array(
            'message' => 'Activities Insert successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('daily_activities')->with($notification);
    }
   
    public function activities_edit($id)
    {   
        $data=PatientActivites::find($id);
        return view('patient.edit_activities',compact('data'));
       
        
    }
    
    public function activities_update(Request $request,$id)
    {   
        $activities=PatientActivites::find($id);
        $activities->update([
            'heart_rate' => $request->heart_rate,
            'fever' => $request->fever,
            'glucose' => $request->glucose,
            'upperblood' => $request->upperblood,
            'lowerblood' => $request->lowerblood,
            'bloodcount' => $request->bloodcount,
            'weight' => $request->weight,
            'height' => $request->height,
            'smoking' => $request->smoking,
            'lungs' => $request->lungs,
            'stomach' => $request->stomach,
            'liver' => $request->liver,
            'heart' => $request->heart,
            'brain' => $request->brain,
            'oxygen' => $request->oxygen,
            'carbon' => $request->carbon,
            'hydrogen' => $request->hydrogen,
            'nitrogen' => $request->nitrogen,
            'calcium' => $request->calcium,
            'other' => $request->other,
        ]);

        $notification = array(
            'message' => 'Activities Update successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('daily_activities')->with($notification);
    }
    
    public function report_store(Request $request)
    {
        $request->validate([
            'r_image' => ['required','mimes:jpeg,png,jpg,gif,svg|max:2048'],
        ]);
        $imagename="";
        if($request->hasfile('r_image')){
            $file = $request->file('r_image');
            $extention = $file->getClientOriginalExtension();
            $imagename = time().'.'.$extention;
            $file->move('uploads/patient/report',$imagename);
        }
        $patient= Patient::findOrFail(Auth::guard('patient')->user()->id);

        $reports = PatientReport::create([
            'patient_id' => $patient->id,
            'r_image' => $imagename,
        ]);

        $notification = array(
            'message' => 'Reports Insert successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }

   

    //prescription
    public function prescription_view()
    {
        
        $patients= Patient::findOrFail(Auth::guard('patient')->user()->id);
        $date=Carbon::now();        
        return view('patient.prescription_view', compact('patients','date'));
    }

    //bill
    public function bill_checkout()
    {
        return view('patient.billing');
    }


    public function bill_store(Request $request)
    {
        $request->validate([
            'tn_id' => ['required'],
            'pay_no' => ['required','numeric','digits_between:11,12'],
        ]);

        $patient= Patient::findOrFail(Auth::guard('patient')->user()->id);
        $patient_activities = BillSystem::create([
            'patient_id' => $patient->id,
            'tn_id' => $request->tn_id,
            'pay_no' => $request->pay_no,
        ]);

        $notification = array(
            'message' => 'Insert successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }

    public function billing_list()
    {
        $bills = BillSystem::all();
        return view('patient.billing_list',compact('bills'));
    }

    public function delete_bill($id)
    {
      $bill = BillSystem::findOrFail($id);
      $bill->delete();
      
      $notification = array(
        'message' => 'Delete successfully!',
        'alert-type' => 'success'
      );
      
      return redirect()->back()->with($notification);

    }





}
