<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <?php if ($segment == 'setting') : ?>
            <a class="navbar-brand fs-4" href="<?= base_url('main'); ?>"><i class="fas fa-seedling me-1"></i>&<i class="ms-2 fas fa-fish me-1"></i></a>
        <?php else : ?>
            <a class="navbar-brand fs-4" href="#home"><i class="fas fa-seedling me-1"></i>&<i class="ms-2 fas fa-fish me-1"></i></a>
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <?php if ($segment == 'setting') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('main'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('main'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('main'); ?>">Control</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('main'); ?>">History</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#control">Control</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#history">History</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url(); ?>assets/img/default-avatar.png" alt="profile" class="rounded-circle border-light" width="28" height="28">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('setting') ?>">Setting</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" id="mqtt-status-indicator" title="MQTT Status">
                        <i class="indicator-mqtt fas fa-circle text-danger"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="block-nav" id="home"></div>