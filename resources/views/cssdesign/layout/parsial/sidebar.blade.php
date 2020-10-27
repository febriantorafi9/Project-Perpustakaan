<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/book.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Ruang Baca</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/Prasaja.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mukhammad Nur Prasaja</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
          @if($menu == 'Home')
            <a href="{{route('beranda')}}" class="nav-link active">
  	        @else
	            <a href="{{route('beranda')}}" class="nav-link">
	            @endif
            <!--<a href="{{route('beranda')}}" class="nav-link">-->
              <i class="fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          @if($menu == 'transaksi')
            <a href="#" class="nav-link active">
  	        @else
	            <a href="#" class="nav-link">
	            @endif
              <i class="fas fa-bookmark"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              @if($submenu == 'peminjaman')
                <a href="/peminjaman" class="nav-link active">
                @else
	                <a href="/peminjaman" class="nav-link">
	                @endif
                  <i class="fas fa-book-open"></i>
                  <p>Peminjaman</p>
                </a>
              </li>
              <li class="nav-item">
              @if($submenu == 'pengembalian')
                <a href="/pengembalian" class="nav-link active">
                @else
	                <a href="/pengembalian" class="nav-link">
	                @endif
                  <i class="fas fa-book-open"></i>
                  <p>Pengembalian</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
          @if($menu == 'petugas')
            <a href="/petugas" class="nav-link active">
  	        @else
	            <a href="/petugas" class="nav-link">
	            @endif
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Petugas
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          @if($menu == 'anggota')
          <a href="/anggota" class="nav-link active">
  	        @else
	            <a href="/anggota" class="nav-link">
	            @endif
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Anggota
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          @if($menu == 'buku')
            <a href="/buku" class="nav-link active">
  	        @else
	            <a href="/buku" class="nav-link">
	            @endif
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          @if($menu == 'rak')
            <a href="/rak" class="nav-link active">
  	        @else
	            <a href="/rak" class="nav-link">
	            @endif
              <i class="nav-icon far fa-folder"></i>
              <p>
                Rak
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  