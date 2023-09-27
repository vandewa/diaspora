  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="{{ asset('a.png') }}" alt="Diaspora" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Diaspora Wonosobo</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="pb-3 mt-3 mb-3 user-panel d-flex">
              <div class="image">
                  <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ auth()->user()->name ?? '-' }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('dashboard') }}"
                          class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-home"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              Berita
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('visimisi') }}"
                          class="nav-link {{ Request::segment(1) == 'visi-misi' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              Visi & Misi
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('pendiri.index') }}"
                          class="nav-link {{ Request::segment(1) == 'pendiri' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              Pendiri
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('sosmed') }}"
                          class="nav-link {{ Request::segment(1) == 'sosial-media' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-hashtag"></i>
                          <p>
                              Sosial Media
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('kontak') }}"
                          class="nav-link {{ Request::segment(1) == 'kontak' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-phone"></i>
                          <p>
                              Kontak
                          </p>
                      </a>
                  </li>
                  <li class="nav-item mt-3">
                      <a href="{{ route('password') }}"
                          class="nav-link {{ Request::segment(1) == 'ganti-password' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-key"></i>
                          <p>
                              Ganti Password
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
