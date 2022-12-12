<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
         @else
            <li class="nav-item">
              <a href="/admin/mahasiswa" class="nav-link">
               <i class="nav-icon fas fa-user"></i>
               <p>
                 Mahasiswa
                </p>
             </a>
           </li>
          <li class="nav-item">
            <a href="/laporan/mahasiswa" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan 
               </p>
            </a>
           </li>
           <li class="nav-item">
             <a href="/admin/program" class="nav-link">
               <i class="nav-icon fas fa-file"></i>
               <p>
                 Program
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/admin/order" class="nav-link">
               <i class="nav-icon fas fa-star"></i>
               <p>
                 Order
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="admin/replacement-lounge" class="nav-link">
               <i class="nav-icon fas fa-file"></i>
               <p>
                 Replacement Lounge
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/admin/admin" class="nav-link">
               <i class="nav-icon fas fa-users"></i>
               <p>
                 Admin
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/admin/location" class="nav-link">
               <i class="nav-icon fas fa-location-arrow"></i>
               <p>
                 Location
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/admin/customized_limit" class="nav-link">
               <i class="nav-icon fas fa-bookmark"></i>
               <p>
                 Customized Limit
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/admin/time" class="nav-link">
               <i class="nav-icon fas fa-clock"></i>
               <p>
                 Time
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/admin/location_time" class="nav-link">
               <i class="nav-icon fas fa-clock"></i>
               <p>
                 Location Time
                </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="/admin/disabled_time" class="nav-link">
               <i class="nav-icon fas fa-clock"></i>
               <p>
                 Disabled Time
                </p>
             </a>
           </li>
           <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </li>
          @endguest
</ul>