<section class="top-section">
    <div class="container">
        <div class="section-container">
            <div class="contact-details">
                <div class="phone">
                    <i class="fa-solid fa-phone"></i>
                    <a href="">98765456789</a>
                </div>
                <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="">example@gmail.com</a>
                </div>
            </div>
            <div class="section-social-media">
                <div class="face-book">
                    <i class="fa-brands fa-facebook"></i>
                    <a href=""> facebook</a>
                </div>
                <div class="instagram">
                    <a href=""><i class="fa-brands fa-instagram"></i> instagram</a>
                </div>
                <div class="youtube">
                    <a href=""><i class="fa-brands fa-youtube"></i></i> Youtube</a>
                </div>
            </div>
            <div class="login">
                <i class="fa-solid fa-user"></i>
                <a href="">Login/Register</a>
            </div>
        </div>
    </div>
</section>
<nav class="navbar navbar-expand-lg shadow-sm" id="navbar">
    <div class="container">
        <a class="navbar-brand d-none d-md-block" href="<?= $root_path ?>" id="logo"><img width="250"
                src="<?= $root_path ?>/assets/logo/logo.png" alt="" class="img-fluid">
        </a>
        <a class="navbar-brand d-block d-md-none" href="<?= $root_path ?>" id="logo"><img width="200"
                src="<?= $root_path ?>/assets/logo/logo.png" alt="" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <div class="dropdown">
                    <li class="nav-item">
                        <div class="nav-link">Home</i></div>
                    </li>
                    <div class="dropdown-content">
                        <a href="" class="dropdown-link">Home 1</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Home 2</a>
                        <br>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root_path ?>/pages/menu.php">Menu</a>
                </li>
                <!-- <div class="dropdown">
                    <li class="nav-item">
                        <div class="nav-link">Menus</i></div>
                    </li>
                    <div class="dropdown-content">
                        <a href="" class="dropdown-link">Menu 1</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Menu 2</a>
                        <br>
                    </div>
                </div> -->
                <div class="dropdown">
                    <li class="nav-item">
                        <div class="nav-link">Shop</i></div>
                    </li>
                    <div class="dropdown-content">
                        <a href="" class="dropdown-link">Our Products</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Product Details</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Shop Cart</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link"> Cart Checkout</a>
                        <br>
                    </div>
                </div>
                <div class="dropdown">
                    <li class="nav-item">
                        <div class="nav-link">News</i></div>
                    </li>
                    <div class="dropdown-content">
                        <a href="" class="dropdown-link">Our Blog</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Blog Details</a>
                        <br>
                    </div>
                </div>
                <div class="dropdown">
                    <li class="nav-item">
                        <div class="nav-link">Pages</i></div>
                    </li>
                    <div class="dropdown-content">
                        <a href="<?= $root_path?>/pages/about.php" class="dropdown-link">About</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Our Services</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Chef Details</a>
                        <br>
                        <hr>
                        <a href="" class="dropdown-link">Login</a>
                        <br>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root_path ?>/pages/contact.php">Contact</a>
                </li>
            </ul>
            <ul class="ms-auto mb-2 mb-lg-0 flex-1">
                <div class="right-bar">
                    <div class="cart">
                        <i class="fa-solid fa-bag-shopping" width="100"></i>
                    </div>
                    <div class="reserve-table">
                        <button>Reserve a Table</button>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>