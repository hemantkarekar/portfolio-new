<header>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <a class="navbar-brand brand-logo py-0" href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/media/logo.jpg" alt="Logo" class="d-inline-block" height="50">
                &nbsp;<?= APP_NAME ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item d-none d-md-inline-block">
                        <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavigation" aria-controls="offcanvasNavigation"><i class="fa-solid fa-bars"></i></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavigation" aria-labelledby="offcanvasNavigationLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavigationLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</div>
<?php $this->load->view('templates/alert_status');
