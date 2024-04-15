<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar position-relative">
    <div class="multinav">
      <div class="multinav-scroll" style="height: 100%;">
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
          <li>
            <a href="{{ route('doctor.dashboard') }}">
              <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
              <span>Dashboard</span>									
            </a>							
          </li>
          
          <li class="treeview">
            <a href="#">
            <i class="icon-Diagnostics"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            <span>Doctors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{ route('doctor.profile')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Doctor Profile</a></li>
            <li><a href="{{ route('doctor.edit_profile',Auth::guard('doctor')->user()->id) }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Edit Profile</a></li>
            <li><a href="{{ route('doctor.edit_password') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Reset Password</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
              <span>Assigned Patients</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('doctor.assign_patient') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Patient List</a></li>
            </ul>
          </li>
         
                  
          <li class="treeview">
            <a href="#">
              <i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
              <span>Authentication</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('doctor.logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>{{ __('Logout') }}</a>
                      <form id="logout-form" action="{{ route('doctor.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    
                    </li>									
            </ul>
          </li>
          
        </ul>

        <div class="sidebar-widgets">
          <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
            <div class="text-center">
              <img
              src="{{asset('contents/admin')}}/images/custom.png"
                class="sideimg p-5" alt="">
            </div>
          </div>
          <div class="copyright text-center m-25">
            <p><strong class="d-block">Hospital Dashboard</strong> © <script>
                document.write(new Date().getFullYear())
              </script> All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</aside>