 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl position-relative d-flex align-items-center">

         <a href="index.html" class="logo d-flex align-items-center me-auto">
             <img src="assets/img/logo.png" alt="" width="70" height="80">
             <h1 class="sitename">Flip Share</h1>
         </a>

         <nav id="navmenu" class="navmenu">
             <ul>
                 <li><a href="{{ route('home') }}" class="@if (Route::is('home')) active @endif">Home</a></li>
                 <li><a href="{{ route('about') }}" class="@if (Route::is('about')) active @endif">About Us</a>
                 </li>
                 <li><a href="{{ route('features') }}"
                         class="@if (Route::is('features')) active @endif">Safety</a></li>
                 <li><a href="{{ route('services') }}"
                         class="@if (Route::is('services')) active @endif">Careers</a></li>
                 <li><a href="{{ route('pricing') }}" class="@if (Route::is('pricing')) active @endif">Blog</a>
                 </li>
                 <li><a href="{{ route('press') }}" class="@if (Route::is('press')) active @endif">Press</a>
                 </li>
                 <li><a href="{{ route('contact') }}" class="@if (Route::is('contact')) active @endif">Contact
                         Us</a></li>
                 {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                             class="bi bi-chevron-down toggle-dropdown"></i></a>
                     <ul>
                         <li><a href="#">Dropdown 1</a></li>
                         <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                     class="bi bi-chevron-down toggle-dropdown"></i></a>
                             <ul>
                                 <li><a href="#">Deep Dropdown 1</a></li>
                                 <li><a href="#">Deep Dropdown 2</a></li>
                                 <li><a href="#">Deep Dropdown 3</a></li>
                                 <li><a href="#">Deep Dropdown 4</a></li>
                                 <li><a href="#">Deep Dropdown 5</a></li>
                             </ul>
                         </li>
                         <li><a href="#">Dropdown 2</a></li>
                         <li><a href="#">Dropdown 3</a></li>
                         <li><a href="#">Dropdown 4</a></li>
                     </ul>
                 </li> --}}
             </ul>
             <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>

         <a class="btn-getstarted" href="index.html#about">Download App</a>

     </div>
 </header>
