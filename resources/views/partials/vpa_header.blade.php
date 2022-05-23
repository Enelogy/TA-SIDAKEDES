  <!-- Topbar Start -->
  <div class="navbar-custom">
      <div class="container-fluid">

          <ul class="list-unstyled topnav-menu float-right mb-0">


              <li class="dropdown d-none d-lg-inline-block">
                  <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                      href="#">
                      <i class="fe-maximize noti-icon"></i>
                  </a>
              </li>



              <li class="dropdown notification-list topbar-dropdown">
                  <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                      href="#" role="button" aria-haspopup="false" aria-expanded="false">
                      <img src="{{ asset('minton/dist/') }}/assets/images/users/avatar-1.jpg" alt="user-image"
                          class="rounded-circle">
                      <span class="pro-user-name ml-1">
                          {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                      </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                      <!-- item-->
                      <div class="dropdown-header noti-title">
                          <h6 class="text-overflow m-0">Welcome !</h6>
                      </div>

                      {{-- <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-account-circle-line"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-settings-3-line"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-wallet-line"></i>
                        <span>My Wallet <span class="badge badge-success float-right">3</span> </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-lock-line"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div> --}}

                      <!-- item-->
                      <a onclick="logout()" href="javascript:;" class="dropdown-item notify-item">
                          <i class="ri-logout-box-line"></i>
                          <span>Logout</span>
                          <form method="post" action="{{ route('logout') }}" id="logout">@csrf
                          </form>
                      </a>

                  </div>
              </li>

              {{-- <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li> --}}

          </ul>

          <!-- LOGO -->
          <div class="logo-box">
              <a href="index.html" class="logo logo-dark text-center">
                  <span class="logo-sm">
                      <img src="{{ asset('minton/dist/') }}/assets/images/logo-sm-dark.png" alt="" height="24">
                      <!-- <span class="logo-lg-text-light">Minton</span> -->
                  </span>
                  <span class="logo-lg">
                      {{-- <img src="{{ asset('minton/dist/') }}/assets/images/logo-2-dark.png" alt="" height="20"> --}}
                      <span class="logo-lg-text-dark">SIDAKEDES</span>
                  </span>
              </a>

              <a href="index.html" class="logo logo-light text-center">
                  <span class="logo-sm">
                      <img src="{{ asset('minton/dist/') }}/assets/images/logo-sm.png" alt="" height="24">
                  </span>
                  <span class="logo-lg">
                      <img src="{{ asset('minton/dist/') }}/assets/images/logo-2-light.png" alt="" height="20">
                  </span>
              </a>
          </div>

          <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
              <li>
                  <button class="button-menu-mobile waves-effect waves-light">
                      <i class="fe-menu"></i>
                  </button>
              </li>

              <li>
                  <!-- Mobile menu toggle (Horizontal Layout)-->
                  <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                      <div class="lines">
                          <span></span>
                          <span></span>
                          <span></span>
                      </div>
                  </a>
                  <!-- End mobile menu toggle-->
              </li>

          </ul>
          <div class="clearfix"></div>
      </div>
  </div>
  <!-- end Topbar -->
