<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Online cancer hospital </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('contents/admin')}}/css/vendors_css.css">
	  
	<!-- Style-->
	
	<link rel="stylesheet" href="{{asset('contents/admin')}}/css/font-awesome.css">
	<link rel="stylesheet" href="{{asset('contents/admin')}}/plugin/toastr.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.css">
	<link rel="stylesheet" href="{{asset('contents/admin')}}/css/style.css">
	<link rel="stylesheet" href="{{asset('contents/admin')}}/css/skin_color.css">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('contents/admin')}}/images/auth-bg/bg-3.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Patient Login Panel</h2>
								<p class="mb-0">Log in to continue to Online Cancer Hospital.</p>							
							</div>
							<div class="p-40">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
								<form method="POST" action="{{ route('patient.login') }}">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Email" name="email" :value="old('email')" required autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password"  name="password"
                                            required autocomplete="current-password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" name="remember" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="#" class="hover-warning"><i class="fa fa-lock"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">LOG IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an admitted? <a href="http://onlin-cancer-hospital.test/#appointment" class="text-warning ms-5">Admit Now</a></p>
								</div>	
							</div>						
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('contents/admin')}}/js/vendors.min.js"></script>
	<script src="{{asset('contents/admin')}}/plugin/toastr.min.js"></script>
	<script src="{{asset('contents/admin')}}/js/pages/chat-popup.js"></script>
    <script src="{{asset('contents/admin')}}/icons/feather-icons/feather.min.js"></script>
		<script>
			@if(Session::has('message'))
					var type = "{{ Session::get('alert-type', 'info') }}";
					switch(type){
							case 'info':
									toastr.info("{{ Session::get('message') }}");
									break;

							case 'warning':
									toastr.warning("{{ Session::get('message') }}");
									break;

							case 'success':
									toastr.success("{{ Session::get('message') }}");
									break;

							case 'error':
									toastr.error("{{ Session::get('message') }}");
									break;
					}
			@endif
	</script>		

</body>

</html>




