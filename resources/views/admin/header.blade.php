
<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch" >
        <img class="navbar-brand brand-logo-mini" width ="150" src="admin/assets/images/logo.png" alt="logo" />

    <ul class="navbar-nav w-100">
        <li class="nav-item nav-settings d-none d-lg-block" style='margin-right:30px'>
            <a class="nav-link" href="{{url('/home')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

        <li class="nav-item w-100">
          <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Search products">
          </form>
        </li>
        <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle='dropdown'
            aria-expanded="false" href="{{url('/view_product')}}">+ Add New Product </a>
        <li>
        <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="{{url('view_product')}}" >
                  <i class="mdi mdi-view-grid"></i>
                  <span class="menu-title">Products</span>
                </a>
        </li>
          <x-app-layout>
          </x-app-layout>
        </li>
      </ul>
    </div>
  </nav>
