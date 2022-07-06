  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('admin.home') }}" class="brand-link">
          <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Ramq</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('admin.users.index') }}" class="nav-link">
                          <p>
                              User
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.admins.index') }}" class="nav-link">
                          <p>
                              Admin
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.sliders.index') }}" class="nav-link">
                          <p>
                              Slider
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.settings.index') }}" class="nav-link">
                          <p>
                              Setting
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.products.index') }}" class="nav-link">
                          <p>
                              Product
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      {{-- <a href="pages/kanban.html" class="nav-link"> --}}
                      <a href="{{ route('admin.links.index') }}" class="nav-link">
                          <p>
                              Social Links
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.partners.index') }}" class="nav-link">
                          <p>
                              Partner
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.features.index') }}" class="nav-link">
                          <p>
                              Features
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.codes.index') }}" class="nav-link">
                          <p>
                              Discount Code
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.statistics.index') }}" class="nav-link">
                          <p>
                              Statistic
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.cities.index') }}" class="nav-link">
                          <p>
                              City
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.regions.index') }}" class="nav-link">
                          <p>
                              Region
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.contact-us.index') }}" class="nav-link">
                          <p>
                              Contact Us
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
