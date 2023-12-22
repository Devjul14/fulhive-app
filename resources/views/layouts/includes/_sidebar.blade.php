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
            <p class="m-0 text-primary mt-1" style="margin-left: 20px;"><i class="fas fa-solid fa-coins"></i>  </i>Crew Point : RM1000</p>
        </div>

    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
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


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed{{ Request::is('product') ? ' active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-solid fa-box"></i>
            <span>Products</span>
        </a>
        <div id="collapseProducts" class="collapse{{ Request::is('product') || Request::is('pricesetting') || Request::is('marketplace') ? ' show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item{{ Request::is('product') ? ' active' : '' }}" href="{{ route('product') }}">Master Products</a>
                <a class="collapse-item{{ Request::is('pricesetting') ? ' active' : '' }}" href="{{ route('pricesetting') }}">Price Setting</a>
                <a class="collapse-item{{ Request::is('marketplace') ? ' active' : '' }}" href="{{ route('marketplace') }}">Marketplace Product</a>
                <a class="collapse-item" href="cards.html">Product Setting</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed{{ Request::is('inbound') ? ' active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseInventory" aria-expanded="true" aria-controls="collapseInventory">
            <i class="fas fa-solid fa-box"></i>
            <span>Inventory</span>
        </a>
        <div id="collapseInventory" class="collapse{{ Request::is('inbound') || Request::is('stock') ? ' show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item{{ Request::is('inbound') ? ' active' : '' }}" href="{{ route('inbound') }}">Inbound</a>
                <a class="collapse-item{{ Request::is('stock') ? ' active' : '' }}" href="{{ route('stock') }}">Stock</a>
                <a class="collapse-item" href="utilities-animation.html">Mutation Stock</a>
                <a class="collapse-item" href="utilities-other.html">Stock Spesial Event</a>
                <a class="collapse-item" href="utilities-other.html">QC Middle</a>
                <a class="collapse-item" href="utilities-other.html">Stock Opname</a>
                <a class="collapse-item" href="utilities-other.html">Request Print Barcode</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed{{ Request::is('find') ? ' active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseWarehouse" aria-expanded="true" aria-controls="collapseWarehouse">
            <i class="fas fa-solid fa-box"></i>
            <span>Warehouses</span>
        </a>
        <div id="collapseWarehouse" class="collapse{{ Request::is('find') || Request::is('mywarehouse') || Request::is('move') || Request::is('exit') ? ' show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item{{ Request::is('find') ? ' active' : '' }}" href="{{ route('find') }}">Find Warehouse</a>
                <a class="collapse-item{{ Request::is('mywarehouse') ? ' active' : '' }}" href="{{ route('mywarehouse') }}">My Warehouses</a>
                <a class="collapse-item{{ Request::is('move') ? ' active' : '' }}" href="{{ route('move') }}">Move Warehouse</a>
                <a class="collapse-item{{ Request::is('exit') ? ' active' : '' }}" href="{{ route('exit') }}">Exit Warehouse</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHelp" aria-expanded="true" aria-controls="collapseHelp">
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
