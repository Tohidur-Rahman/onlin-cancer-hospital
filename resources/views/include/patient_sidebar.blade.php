<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar position-relative">
    <div class="multinav">
      <div class="multinav-scroll" style="height: 100%;">
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
          <li>
            <a href="{{ route('patient.dashboard') }}">
              <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
              <span>Dashboard</span>									
            </a>							
          </li>
        
          <li class="treeview">
            <a href="#">
              <i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
              <span>Patients</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              
              <li><a href="{{ route('patient.report') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Medical Reports</a></li>
              <li><a href="{{ route('patient.prescription_view') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Prescription</a></li>
              <li><a href="{{ route('daily_activities') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Daily Activities</a></li>
            </ul>
          </li>
          <li>
            <a href="{{ route('patient.billing') }}">
              <i class="icon-Settings-1"><span class="path1"></span><span class="path2"></span></i>
              <span>Payment Method</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
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
              <li>
                <a class="dropdown-item" href="{{ route('patient.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-lock text-muted me-2"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('patient.logout') }}" method="POST" class="d-none">
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
            <p><strong class="d-block">Patient Dashboard</strong> © <script>
                document.write(new Date().getFullYear())
              </script> All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</aside>