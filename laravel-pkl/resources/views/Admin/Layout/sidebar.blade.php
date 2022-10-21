<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('home') }}" class="brand-link">
        <img src="{{ asset('/template/frontend/images/logo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (auth()->user()->level == 'admin')
                    <ul class="nav nav-treeview">
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('koordinator') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Koordinator
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-th nav-icon"></i>
                            <p>
                                Menu
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('data-dosen') }}" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>Data Dosen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('data-mahasiswa') }}" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>Data Mahasiswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('disetujui') }}" class="nav-link">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Pendaftaran TA</p>
                                </a>
                            </li>

                        </ul>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-bullhorn nav-icon"></i>
                            <p>
                                Pengumuman
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('jadwal-seminar') }}" class="nav-link">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>Jadwal Seminar</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('pembimbing') }}" class="nav-link">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>Pembimbing / Penguji</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a href="{{ url('logout') }}" class="nav-link">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>

                    <ul class="nav nav-treeview">
                    </ul>
                </li>
            </li>
    </div>
    @endif

          @if (auth()->user()->level == 'dosen')
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-th nav-icon"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('mahasiswa-ta') }}" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('lihat-jadwal') }}" class="nav-link">
                  <i class="fas fa-calendar-alt nav-icon"></i>
                  <p>Jadwal Seminar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('login') }}" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    @endif
 
                @if (auth()->user()->level == 'mahasiswa')
                <ul class="nav nav-treeview">
                </ul>
                </li>
                <li class="nav-item">
                    <a href="widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Novia
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-th nav-icon"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('ajukan-pendaftaran') }}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Pendaftaran Tugas Akhir</p>
                            </a>
                        </li>
                        </a>
                </li>
            </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-bullhorn nav-icon"></i>
                    <p>
                        Pengumuman
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('jadwal-seminar-mahasiswa') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>jadwal Seminar</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('pembimbing-penguji') }}" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>Pembimbing / Penguji</p>
                        </a>
                    </li>
                </ul>
            <li class="nav-item">
                <a href="{{ url('login') }}" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
            </li>
            <ul class="nav nav-treeview">
            </ul>
    </div>
    @endif
</aside>

