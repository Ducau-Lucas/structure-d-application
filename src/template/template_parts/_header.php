<header>
    <div class="overlay"></div>
    <nav>
        <div class="logo">
            <img src="<?= IMAGES ?>/logo1.png" alt="">
        </div>
        <div id="menu_large">
            <ul class="visible">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?page=about">A propos</a></li>
                <li><a href="index.php?page=services">Services</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
            <div>
                <button>TAKE ACTION</button>
            </div>
        </div>
        <button id="burger">
            <svg class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z">
                </path>
            </svg>
        </button>
    </nav>
    <section class="headerSlogan">
        <h1><?= $titre ?></h1>
    </section>
</header>