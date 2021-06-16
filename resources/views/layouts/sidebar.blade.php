 <!-- Left Sidenav -->
 <div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.html" class="logo">
            <span>
                <img src="{{asset('/bassets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{asset('/bassets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{asset('/bassets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">


        <li>
        <a href="home"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Home</span></a>
        </li>



        <li>
        <a href="profile"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Profile</span></a>
        </li>


        {{-- @role('managers') --}}
        <li>
        <a href="/dashboard/roles"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Roles</span></a>
        </li>
        {{-- @endrole --}}

         {{-- @role('managers') --}}
         <li>
            <a href="/dashboard/permission"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Permissions</span></a>
            </li>
      {{-- @endrole --}}


        </ul>

    </div>
</div>
<!-- end left-sidenav-->
