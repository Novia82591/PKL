<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('home-mahasiswa') }}" class="brand-link">
        <img src="{{ asset('/template/frontend/images/logo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
              
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
                            <a href="{{ url('pendaftaran') }}" class="nav-link">
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

</aside>
