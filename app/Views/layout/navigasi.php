<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    <li class="nav-item ">
        <a href="<?= base_url('dashboard') ?>" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p> Dashboard </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="<?= base_url('user'); ?>" class="nav-link">
        <i class="nav-icon fas fa-user-circle"></i>
        <p> Data User </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="<?= base_url('dashboard/konsumen'); ?>" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p> Data Konsumen </p>
        </a>
    </li>
    
    <li class="nav-item">
        <a href="https://adminlte.io/docs/3.1/" target="_blank" class="nav-link">
        <i class="nav-icon fas fa-file"></i>
        <p>Documentation</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="<?= base_url('logout'); ?>" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Log Out</p>
        </a>
    </li>
    </ul>
</nav>