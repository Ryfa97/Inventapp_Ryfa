<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img src="../assets/img/inventapp.png" alt="logo" width="150" >

      {{-- <a href="index.html">Stisla</a> --}}
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">IA</a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')
        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

        <li class="menu-header">Manajement Inventory</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-regular fa-folder-open"></i> <span>Data</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category') }}">Category</a></li>
                    <li><a class="nav-link" href="{{ route('product') }}">Product</a></li>
                </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-solid fa-chart-line"></i><span>Kelola Barang</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('masuk') }}">Barang Masuk</a></li>
                    <li><a class="nav-link" href="{{ route('keluar') }}">Barang Keluar</a></li>
                    <li><a class="nav-link" href="{{ route('rusak') }}">Barang Rusak</a></li>
                    <li><a class="nav-link" href="{{ route('bekas') }}">Barang Bekas</a></li>
                </ul>
        </li>
        <li><a class="nav-link" href="{{ route('stok') }}"><i class="fas fa-solid fa-cube"></i><span>Stok Gudang</span></a></li>
        <li><a class="nav-link" href="{{ route('history') }}"><i class="fas fa-solid fa-landmark"></i><span>History</span></a></li>
        <li><a class="nav-link" href="#"><i class="fas fa-solid fa-address-card"></i><span>Manajement User</span></a></li>
        @show
    </ul>
      {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div> --}}
  </aside>
