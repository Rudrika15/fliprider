 <div class="main-menu">
     <header class="header">
         <a href="index.html" class="logo">Flip Rider</a>
         <button type="button" class="button-close fa fa-times js__menu_close"></button>
         <div class="user">
             <a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span
                     class="status online"></span></a>
             <h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5>
             <h5 class="position">
                 @if (!empty(Auth::user()->getRoleNames()))
                     @foreach (Auth::user()->getRoleNames() as $v)
                         <label class="">{{ $v }}</label>
                     @endforeach
                 @endif
             </h5>

             <!-- /.name -->
             <div class="control-wrap js__drop_down">
                 <i class="fa fa-caret-down js__drop_down_button"></i>
                 <div class="control-list">
                     <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                     <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>
                     <div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Log out</a></div>
                 </div>
                 <!-- /.control-list -->
             </div>
             <!-- /.control-wrap -->
         </div>
         <!-- /.user -->
     </header>
     <!-- /.header -->
     <div class="content">

         <div class="navigation">
             <h5 class="title">Navigation</h5>
             <!-- /.title -->
             <ul class="menu js__accordion">
                 <li @if (Route::currentRouteName() == 'dashboard') class="current" @endif>
                     <a class="waves-effect" href="{{ route('dashboard') }}">
                         <i class="menu-icon fa fa-home"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>
                 @if (Auth::user()->hasRole('ADMIN'))
                     <li @if (Route::currentRouteName() == 'users.index') class="current" @endif>
                         <a class="waves-effect" href="{{ route('users.index') }}">
                             <i class="menu-icon fa fa-users"></i>
                             <span>Users</span>
                         </a>
                     </li>
                 @endif
                 @if (Auth::user()->hasRole('ADMIN'))
                     <li @if (Route::currentRouteName() == 'roles.index') class="current" @endif>
                         <a class="waves-effect" href="{{ route('roles.index') }}">
                             <i class="menu-icon fa fa-gear"></i>
                             <span>Roles</span>
                         </a>
                     </li>
                 @endif
                 @if (Auth::user()->hasRole('ADMIN'))
                     <li @if (Route::currentRouteName() == 'drivers.index') class="current" @endif>
                         <a class="waves-effect" href="{{ route('drivers.index') }}">
                             <i class="menu-icon fa fa-users"></i>
                             <span>Drivers</span>
                         </a>
                     </li>
                 @endif

                 <li @if (Route::currentRouteName() == 'rates.index') class="current" @endif>
                     <a class="waves-effect" href="{{ route('rates.index') }}">
                         <i class="menu-icon fa fa-money"></i>
                         <span>Rates</span>
                     </a>
                 </li>

                 <li @if (Route::currentRouteName() == 'vehicles.index') class="current" @endif>
                     <a class="waves-effect" href="{{ route('vehicles.index') }}">
                         <i class="menu-icon fa fa-car"></i>
                         <span>Vehicles</span>
                     </a>
                 </li>

                 <li @if (Route::currentRouteName() == 'vehicles.faq.index') class="current" @endif>
                     <a class="waves-effect" href="{{ route('vehicles.faq.index') }}">
                         <i class="menu-icon fa fa-question"></i>
                         <span>Vehicle's Faqs</span>
                     </a>
                 </li>
                 <li @if (Route::currentRouteName() == 'vehicles.rule.index') class="current" @endif>
                     <a class="waves-effect" href="{{ route('vehicles.rule.index') }}">
                         <i class="menu-icon fa fa-book"></i>
                         <span>Vehicle's Rules</span>
                     </a>
                 </li>
                 {{-- <li @if (Route::currentRouteName() == 'request') class="current" @endif>
                     <a class="waves-effect" href="{{ route('request') }}">
                         <i class="menu-icon fa fa-users"></i>
                         <span>Fare Calculator</span>
                     </a>
                 </li> --}}
             </ul>

         </div>
         <!-- /.navigation -->
     </div>
     <!-- /.content -->
 </div>
 <!-- /.main-menu -->
