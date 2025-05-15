<nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="<?= base_url('dashboard')?>" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="<?= base_url('dashboard')?>" class="nav-item nav-link active">Home</a>
                    <a href="<?= base_url('about')?>" class="nav-item nav-link">About</a>
                    <a href="<?= base_url('services')?>" class="nav-item nav-link">Service</a>
                    <a href="<?= base_url('menu')?>" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="<?= base_url('pages/reservation')?>" class="dropdown-item">Reservation</a>
                            <a href="<?= base_url('pages/testimonial')?>" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="<?= base_url('contact')?>" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
