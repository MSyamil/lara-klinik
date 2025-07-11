<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('img/logo.png') }}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">LARA-KLINIK</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link @if(Route::currentRouteName() == 'dashboard') active
                  class="active"
                @endif">
                  <i class="nav-icon bi bi-house"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kelurahan') }}" class="nav-link @if(Route::currentRouteName() == 'kelurahan') active
                  class="active"
                @endif">
                  <i class="nav-icon bi bi-building"></i>
                  <p>kelurahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pasien') }}" class="nav-link @if(Route::currentRouteName() == 'pasien') active
                  class="active"
                @endif">
                  <i class="nav-icon bi bi-person"></i>
                  <p>pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('paramedik') }}" class="nav-link @if(Route::currentRouteName() == 'paramedik') active
                  class="active"
                @endif">
                  <i class="nav-icon bi bi-person-badge"></i>
                  <p>paramedik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('periksa') }}" class="nav-link @if(Route::currentRouteName() == 'periksa') active
                  class="active"
                @endif">
                  <i class="nav-icon bi bi-clipboard"></i>
                  <p>Periksa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('unitkerja') }}" class="nav-link @if(Route::currentRouteName() == 'unitkerja') active
                  class="active"
                @endif ">
                  <i class="nav-icon bi bi-hospital"></i>
                  <p>Unit Kerja</p>
              </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <div class="content-wrapper">
        <section class="content" style="margin-top: 70px;">
            <div class="container-fluid">