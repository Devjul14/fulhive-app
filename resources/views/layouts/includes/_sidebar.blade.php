<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center mt-4" href="{{ url('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">{{ Auth::user()->name }} <span class="badge badge-dark" style="text-transform: lowercase">{{ Auth::user()->roles->pluck('name')[0] ?? '' }}</span></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0 mt-3">

<!-- Sidebar Wallet -->
<div class="sidebar-card d-none d-lg-flex bg-white mt-4">
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
        <span>Transaction</span></a>
</li>


<!-- Nav Item - Product -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-solid fa-cubes"></i>
        <span>Products</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('masterProduct') }}">Master Products</a>
            <a class="collapse-item" href="{{ route('priceSetting') }}">Price Setting</a>
            <a class="collapse-item" href="{{ route('productMarketplace') }}">Marketplace Product</a>
            <a class="collapse-item" href="cards.html">Product Setting</a>
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
            <a class="collapse-item" href="utilities-animation.html">Mutation Stock</a>
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
        <span>Warehouses</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('find') }}">Find Warehouse</a>
            <a class="collapse-item" href="register.html">My Warehouses</a>
            <a class="collapse-item" href="forgot-password.html">Move Warehouse</a>
            <a class="collapse-item" href="forgot-password.html">Exit Warehouse</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
        aria-expanded="true" aria-controls="collapseReport">
        <i class="fas fa-solid fa-chart-bar"></i>
        <span>Report</span>
    </a>
    <div id="collapseReport" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Sales</a>
            <a class="collapse-item" href="login.html">Sales Produck</a>
            <a class="collapse-item" href="register.html">Find Transaction</a>
            <a class="collapse-item" href="forgot-password.html">Financial Report</a>
            <a class="collapse-item" href="forgot-password.html">Stock Adjusment</a>
            <a class="collapse-item" href="forgot-password.html">Logistics</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
        aria-expanded="true" aria-controls="collapseSetting">
        <i class="fas fa-solid fa-wrench"></i>
        <span>Setting</span>
    </a>
    <div id="collapseSetting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('setting_account') }}">Account</a>
            <a class="collapse-item" href="login.html">Packaging</a>
            <a class="collapse-item" href="{{ url('shop') }}">Store</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHelp"
        aria-expanded="true" aria-controls="collapseHelp">
        <i class="fas fa-solid fa-comment"></i>
        <span>Support Center</span>
    </a>
    <div id="collapseHelp" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Complain</a>
            <a class="collapse-item" href="login.html">Ticket</a>
            <a class="collapse-item" href="register.html">Chat</a>
            <a class="collapse-item" href="register.html">FAQ</a>
        </div>
    </div>
</li>

</ul>
<!-- End of Sidebar -->
