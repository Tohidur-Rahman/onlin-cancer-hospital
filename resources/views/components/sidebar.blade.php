<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar position-relative">
    <div class="multinav">
      <div class="multinav-scroll" style="height: 100%;">
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
          <li>
            <a href="{{ route('admin') }}">
              <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
              <span>Dashboard</span>									
            </a>							
          </li>
          
          <li class="treeview">
            <a href="#">
              <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
              <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="{{ route('user.create') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Add User</a> 
                    
              </li>
              <li><a href="{{ route('admin.user') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>User List</a>
              </li>
            </ul>
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
            <li><a href="{{ route('doctor.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Doctors</a></li>
            <li><a href="{{ route('doctor.view_list') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Doctor List</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="icon-Half-heart"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
            <span>Disease</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{ route('admin.add_disease') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Disease</a></li>
            <li><a href="{{ route('admin.view_disease') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Disease List</a></li>
            </ul>
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
              <li><a href="{{ route('patient.list') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Patient List</a></li>
              
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="icon-Mail"><span class="path1"></span><span class="path2"></span></i>
              <span>Contacts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('contact_list') }}"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Contact List</a></li>
              
            </ul>
          </li>
          <li>
            <a href="{{ route('patient.billing_list') }}">
              <i class="icon-Settings-1"><span class="path1"></span><span class="path2"></span></i>
              <span>Billing Reports</span>
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
              <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><i class="icon-Commit"><span class="path1"></span><span
                      class="path2"></span></i>Logout</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>									
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