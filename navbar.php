<section class="navbar-top">
    <div class="overlay">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-2 align-items-center">
                <a class="navbar-brand mr-0" href="index.php">
                    <img src="images/motoindex-logo.svg" alt="moto-logo">
                </a>
                <a href="https://accounts.moto-index.com" class="btn btn-secondary ml-auto mr-3 d-flex align-items-start d-lg-none">
                    Login <i class="bi bi-arrow-right ml-4"></i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item <?php if ($currentPage == 'home') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="index.php">Main</a>
                        </li>
                        <li class="nav-item <?php if ($currentPage == 'about') {
                                                echo 'active';
                                            } ?>">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact-t">Contact</a>
                        </li>
                    </ul>
                </div>
                <a href="https://accounts.moto-index.com" class="btn btn-secondary ml-auto align-items-start d-none d-lg-flex">
                    Login <i class="bi bi-arrow-right ml-4"></i>
                </a>
            </nav>
        </div>
    </div>
</section>