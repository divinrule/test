<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('customers/dashboard') ?>">
                <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('customers/edit/'.$userInfo['id']) ?>">
                <span data-feather="file"></span>
                Edit Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('customers/update_password/'.$userInfo['id']) ?>">
                <span data-feather="file"></span>
                Change Password
                </a>
            </li>
        </ul>
    </div>
</nav>