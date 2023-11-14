 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('active-dashboard')">
            <i class="nav-icon tf-icons bx bx-home-circle"></i>
            <p>Dashboard</p>
         </a>
            </a>
          </li>
          <li class="nav-header text-uppercase">
          <span class="nav-header-text">Menu</span>

          </li>
        
          <li class="nav-item">
            <a href="#" class="nav-link @yield('active-data-master')">
              <i class="nav-icon tf-icons bx bx-copy"></i>
              <p>
                Data Master
              </p>

            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kategori" class="nav-link  @yield('active-kategori')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/rak" class="nav-link  @yield('active-rak')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penerbit" class="nav-link  @yield('active-penerbit')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/buku" class="nav-link  @yield('active-buku')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header text-uppercase">
          <span class="nav-header-text">Transaksi</span>
          </li>
          <li class="nav-item">
            <a href="/transaksi" class="nav-link @yield('active-transaksi')">
              <i class=" tf-icons bx bx-cart"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-header text-uppercase">
          <span class="nav-header-text">Chart</span>
          </li>
          <li class="nav-item">
            <a href="/chart" class="nav-link @yield('active-chart')">
              <i class=" tf-icons bx bx-chart"></i>
              <p>
                Chart
              </p>
            </a>
          </li>
         
          @role('admin')
          <li class="nav-header text-uppercase">
          <span class="nav-header-text">Account</span>
          </li>
              <li class="nav-item">
                <a href="/user" class="nav-link @yield('active-user')">
                <i class="tf-icons bx bx-user"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
          @endrole
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>