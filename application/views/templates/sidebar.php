<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= $user['name']; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/profile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin Profile</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href='#' data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Berita</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/b_berita'); ?>">Buat Berita</a>
                <a class="collapse-item" href="<?= base_url('admin/berita'); ?>">Berita</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Edit Name</a>
                <a class="collapse-item" href="cards.html">Edit</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <footer class="sticky-footer bg-blue">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-white">
                <span>Copyright &copy; PKM_Unpam 2020</span>
            </div>
        </div>
    </footer>
</ul>
<!-- End of Sidebar -->