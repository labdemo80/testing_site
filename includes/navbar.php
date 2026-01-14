<?php // includes/navbar.php ?>
<style>

/* ================= ROOT VARIABLES ================= */
:root {
    --cream-bg: #FAF7F2;
    --teal-main: #5F8F8B;
    --teal-dark: #4F7E7A;
    --text-dark: #2F2F2F;
    --text-light: #FFFFFF;
    --soft-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
}

/* ================= NAVBAR BASE ================= */
.navbar {
    background-color: var(--cream-bg);
    height: 80px;                 /* FIXED HEIGHT */
    padding: 0;                   /* IMPORTANT */
    border-bottom: 1px solid rgba(0,0,0,0.05);
    transition: all 0.35s ease;
    display: flex;
    align-items: center;
}

/* Shrink on scroll */
.navbar.scrolled {
    height: 68px;                 /* FIXED SHRINK HEIGHT */
    box-shadow: var(--soft-shadow);
}

/* Center container vertically */
.navbar .container {
    height: 100%;
    display: flex;
    align-items: center;
}

/* ================= BRAND ================= */
.navbar-brand {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0;
    margin: 0;
    line-height: 1;
}

/* Logo (CAN BE INCREASED SAFELY NOW) */
.navbar-logo {
    height: 190px;                 /* ← CHANGE THIS FREELY */
    width: auto;
    object-fit: contain;
    display: block;
}

/* ================= NAV LINKS ================= */
.navbar-nav .nav-link {
    color: var(--text-dark);
    margin-left: 22px;
    font-weight: 500;
    position: relative;
    transition: color 0.3s ease;
}

/* Underline hover (soft) */
.navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: -6px;
    width: 0;
    height: 2px;
    background-color: var(--teal-main);
    transform: translateX(-50%);
    transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: var(--teal-dark);
}

.navbar-nav .nav-link:hover::after {
    width: 55%;
}

/* ================= CTA BUTTON ================= */
.nav-cta {
    background-color: var(--teal-main);
    color: var(--text-light) !important;
    padding: 10px 22px;
    border-radius: 50px;
    font-weight: 600;
    margin-left: 26px;
    transition: all 0.3s ease;
}

.nav-cta:hover {
    background-color: var(--teal-dark);
    transform: translateY(-1px);
}

/* ================= MOBILE MENU ================= */
@media (max-width: 991px) {

    .navbar {
        height: 72px;             /* mobile fixed height */
    }

    .navbar.scrolled {
        height: 64px;
    }

    .navbar-collapse {
        background-color: var(--cream-bg);
        border-radius: 18px;
        padding: 20px;
        box-shadow: var(--soft-shadow);
    }

    .navbar-nav .nav-link {
        margin: 14px 0;
        text-align: center;
    }

    .nav-cta {
        margin: 18px auto 0;
        display: block;
        text-align: center;
    }

    .navbar-logo {
        height: 52px;
    }
}

</style>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo/logo_9.png" class="navbar-logo" alt="Feeling Good">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="testimonials.php">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                

                <li class="nav-item">
                    <a class="nav-link nav-cta" href="booksession.php">
                        Book Session
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script>
/* Shrink navbar on scroll */
window.addEventListener("scroll", () => {
    document
        .querySelector(".navbar")
        .classList.toggle("scrolled", window.scrollY > 40);
});
</script>
