@extends('layouts.patient_app')
@section('content')
<section class="content">
    <div class="row">
      <div class="col-12">
        <div class="box">
          <div class="box-body">
            <div class="indian-payment">
                <div class="containers " style="padding: 30px;">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <div class="row">
                            @foreach ($errors->all() as $error)
                            
                                <div class="col-lg-3 col-md-3">
                                    <li>{{ $error }}</li>
                                </div>
            
                            @endforeach
                        </div>
                        </ul>
                    </div>
                    @endif
                   <form class="form-horizontal" action="{{ route('patient.billing_store') }}" method="post">
                    @csrf
                        <div class="">
                            <div class="tab-pane active">
                                <div class="payment-info" style="text-align: center;">
                                    <h2>অফলাইন পেমেন্ট করুন</h2>
                                    <p style="font-size: 18px; padding-bottom: 30px;">নিচের যেকোন একটি পেমেন্ট মাধ্যম সিলেক্ট করুন। তারপর আপনার মোবাইল থেকে ম্যানুয়ালি পেমেন্ট করে ফরম পূরণ করে সাবমিট করুন।</p>
                                </div>
                                <div class="controlContainer">
                                    <div class="tab-container">
                                        <div class="tab-navigation">
                                            <select id="select-box" name="payment_method">
                                                <!-- <option value="1"> Select Payment Method </option>
                                                <option value="2">bKash</option>
                                                <option value="3">Rocket</option>
                                                <option value="4">Nagad</option>
                                                <option value="5">Upay</option>
                                                <option value="6">Paytm</option>
                                                <option value="7">Gpay</option>
                                                <option value="8">WhatsApp Pay</option>
                                                <option value="9">Phonepe</option> -->
            
                                                <option value="1"> Select Payment Method </option>
                                                <option value="bKash">bKash</option>
                                                <option value="Rocket">Rocket</option>
                                                <option value="Nagad">Nagad</option>
                                                <option value="Upay">Upay</option>
                                                
                                            </select>
                                        </div>
            
                                        <div id="tab-1" class="tab-content" style="display: block;">
                                            <div class="icon-item" style="text-align: center;">
                                                <i class="fas fa-angle-up"></i>
                                                <p style="font-weight: 500; font-size: 20px; padding-bottom: 30px;"> যেটাতে
                                                    পেমেন্ট করবেন / করেছেন সেটি সিলেক্ট করুন </p>
                                            </div>
                                        </div>
                                        <div id="tab-bKash" class="tab-content" style="text-align: center; display: none;">
                                            <div class="payment-details">
                                                <div class="payment-logo">
                                                    <img src="{{asset('contents/admin')}}/images/bill/bkash-offline-logo.png">
                                                </div>
                                                <div class="bkash-payment">
                                                    <p>অনুগ্রহ করে প্রথমে আপনার bKash পেমেন্ট সম্পূর্ণ করুন, তারপর নিচের ফর্মটি
                                                        পূরণ করুন। মোট পরিমাণ ৳ ৫০০ টাকা /Monthly</p>
                                                    <h6>01800000000</h6>
                                                    <h5>Send Money / Cash In</h5>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="address_bKash"> পেমেন্ট করার পর যে ট্রানজেকশন আইডি পেয়েছেন সেটি দিন
                                                </label>
                                                <input type="text" class="form-control" id="address_bKash" placeholder="9BC0P8FXXX" name="tn_id" value="" required="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="number_bKash">যে নাম্বার থেকে পেমেন্ট করেছেন সেটি দিন</label>
                                                <input type="number" class="form-control" id="number_bKash" placeholder="017XXXXXXXX" name="pay_no" value="" required="" disabled="disabled">
                                            </div>
                                            <button type="submit" class="btn bkash-btn ">Submit bKash Payment</button>
                                        </div>
            
                                        <div id="tab-Rocket" class="tab-content" style="text-align: center; display: none;">
                                            <div class="payment-details">
                                                <div class="payment-logo">
                                                    <img src="{{asset('contents/admin')}}/images/bill/rocket-offline-logo.png">
                                                </div>
                                                <div class="rocket-payment">
                                                    <p>অনুগ্রহ করে প্রথমে আপনার Rocket পেমেন্ট সম্পূর্ণ করুন, তারপর নিচের ফর্মটি
                                                        পূরণ করুন। মোট পরিমাণ ৳ ৫০০ টাকা /Monthly</p>
                                                    <h6>01800000000</h6>
                                                    <h5>Send Money / Cash In</h5>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="address_Rocket"> পেমেন্ট করার পর যে ট্রানজেকশন আইডি পেয়েছেন সেটি দিন
                                                </label>
                                                <input type="text" class="form-control" id="address_Rocket" placeholder="277788XXXX" name="tn_id" value="" required="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="number_Rocket">যে নাম্বার থেকে পেমেন্ট করেছেন সেটি দিন</label>
                                                <input type="number" class="form-control" id="number_Rocket" placeholder="017XXXXXXXX" name="pay_no" value="" required="" disabled="disabled">
                                            </div>
                                            <button type="submit" class="btn rocket-btn">Submit Rocket Payment</button>
                                        </div>
                                        <div id="tab-Nagad" class="tab-content" style="text-align: center; display: none;">
                                            <div class="payment-details">
                                                <div class="payment-logo">
                                                    <img src="{{asset('contents/admin')}}/images/bill/nagad-offline-logo.png">
                                                </div>
                                                <div class="nagad-payment">
                                                    <p>অনুগ্রহ করে প্রথমে আপনার Nagad পেমেন্ট সম্পূর্ণ করুন, তারপর নিচের ফর্মটি
                                                        পূরণ করুন। মোট পরিমাণ ৳ ৫০০ টাকা /Monthly</p>
                                                    <h6>01800000000</h6>
                                                    <h5>Send Money / Cash In</h5>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="address_Nagad"> পেমেন্ট করার পর যে ট্রানজেকশন আইডি পেয়েছেন সেটি দিন
                                                </label>
                                                <input type="text" class="form-control" id="address_Nagad" placeholder="713LCXXX" name="tn_id" value="" required="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="number_Nagad">যে নাম্বার থেকে পেমেন্ট করেছেন সেটি দিন</label>
                                                <input type="number" class="form-control" id="number_Nagad" placeholder="017XXXXXXXX" name="pay_no" value="" required="" disabled="disabled">
                                            </div>
                                            <button type="submit" class="btn nagad-btn">Submit Nagad Payment</button>
                                        </div>
            
                                        <div id="tab-Upay" class="tab-content" style="text-align: center; display: none;">
                                            <div class="payment-details">
                                                <div class="payment-logo">
                                                    <img src="{{asset('contents/admin')}}/images/bill/upay-offline-logo.png">
                                                </div>
                                                <div class="upay-payment">
                                                    <p style="color: #242424 !important; ">অনুগ্রহ করে প্রথমে আপনার Upay পেমেন্ট
                                                        সম্পূর্ণ করুন, তারপর নিচের ফর্মটি পূরণ করুন। মোট পরিমাণ ৳ ৫০০ টাকা /Monthly</p>
                                                    <h6 style="color: #242424 !important; ">01800000000</h6>
                                                    <h5 style="color: #242424 !important; ">Send Money / Cash In</h5>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="address"> পেমেন্ট করার পর যে ট্রানজেকশন আইডি পেয়েছেন সেটি দিন
                                                </label>
                                                <input type="text" class="form-control" id="address_Upay" placeholder="Input Transaction ID Number" name="tn_id" value="" required="" disabled="disabled">
                                            </div>
                                            <div class="form-group">
                                                <label for="number_Upay">যে নাম্বার থেকে পেমেন্ট করেছেন সেটি দিন</label>
                                                <input type="number" class="form-control" id="number_Upay" placeholder="017XXXXXXXX" name="numbe_Upayr" value="" required="" disabled="disabled">
                                            </div>
            
                                            <button type="submit" class="btn upay-btn">Submit Upay Payment</button>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>			
  </section>





@endsection
