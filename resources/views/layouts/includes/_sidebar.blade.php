<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ Auth::user()->name }} </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Sidebar Wallet -->
<div class="sidebar-card d-none d-lg-flex bg-white">
    <div style="text-align: justify;">
        <p class="m-0 text-primary"><i class="fas fa-solid fa-wallet"></i>  Crew Wallet : RM100</p> <span></span>
        <p class="m-0 text-primary mt-1" style="margin-left: 20px;"><i class="fas fa-solid fa-coins"></i>  </i>Crew Point  : RM1000</p>
    </div >

</div>

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ url('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Transaksi -->
<li class="nav-item">
    <a class="nav-link" href="index.html">
        <i class="fas fa-solid fa-clipboard-list"></i> 
        <span>Transaksi</span></a>
</li>


<!-- Nav Item - Product -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-solid fa-cubes"></i>
        <span>Produk</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buttons.html">Master Produk</a>
            <a class="collapse-item" href="cards.html">Pengaturan Harga</a>
            <a class="collapse-item" href="cards.html">Produk Marketplace</a>
            <a class="collapse-item" href="cards.html">Pengaturan Produk</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-solid fa-box"></i>
        <span>Inventory</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Inbound</a>
            <a class="collapse-item" href="utilities-border.html">Stock</a>
            <a class="collapse-item" href="utilities-animation.html">Mutasi Stock</a>
            <a class="collapse-item" href="utilities-other.html">Stock Spesial Event</a>
            <a class="collapse-item" href="utilities-other.html">QC Middle</a>
            <a class="collapse-item" href="utilities-other.html">Stock Opname</a>
            <a class="collapse-item" href="utilities-other.html">Request Print Barcode</a>
        </div>
    </div>
</li>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-solid fa-warehouse"></i>
        <span>Gudang</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Cari Gudang</a>
            <a class="collapse-item" href="register.html">Gudang Saya</a>
            <a class="collapse-item" href="forgot-password.html">Pindah Gudang</a>
            <a class="collapse-item" href="forgot-password.html">Exit Gudang</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
        aria-expanded="true" aria-controls="collapseReport">
        <i class="fas fa-solid fa-chart-bar"></i>
        <span>Laporan</span>
    </a>
    <div id="collapseReport" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Penjualan</a>
            <a class="collapse-item" href="login.html">Penjualan Produck</a>
            <a class="collapse-item" href="register.html">Cari Transaksi</a>
            <a class="collapse-item" href="forgot-password.html">Laporan Keuangan</a>
            <a class="collapse-item" href="forgot-password.html">Penyesuaian Stock</a>
            <a class="collapse-item" href="forgot-password.html">Logistik</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
        aria-expanded="true" aria-controls="collapseSetting">
        <i class="fas fa-solid fa-wrench"></i>
        <span>Pengaturan</span>
    </a>
    <div id="collapseSetting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('setting_account') }}">Akun</a>
            <a class="collapse-item" href="login.html">Packaging</a>
            <a class="collapse-item" href="{{ url('shop') }}">Info Toko</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHelp"
        aria-expanded="true" aria-controls="collapseHelp">
        <i class="fas fa-solid fa-comment"></i>
        <span>Pusat Bantuan</span>
    </a>
    <div id="collapseHelp" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Komplain</a>
            <a class="collapse-item" href="login.html">Tiket</a>
            <a class="collapse-item" href="register.html">Chat</a>
            <a class="collapse-item" href="register.html">FAQ</a>
        </div>
    </div>
</li>

</ul>
<!-- End of Sidebar -->
