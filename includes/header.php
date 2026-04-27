<?php
// Get current page for active state
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="<?php echo $_SESSION['lang'] ?? 'en'; ?>" style="scroll-behavior: smooth;">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title><?php echo isset($page_title) ? $page_title . ' - PKBM Bread of Life' : 'PKBM Bread of Life'; ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Fredoka:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/custom.css">

<style>
:root{
    --bg-cream: #FFFBF0;
    --text-dark: #2D2640;
    --accent-pink: #FF9F9F;
    --accent-purple: #C5A3FF;
    --accent-orange: #FFC371;
    --accent-green: #2ECC71;
    --font-heading: 'Fredoka', sans-serif;
    --font-body: 'Poppins', sans-serif;
    --font-script: 'Dancing Script', cursive;
    --border-calm: rgba(45, 38, 64, 0.1);
}

body{
    font-family: var(--font-body);
    background-color: var(--bg-cream);
    color: var(--text-dark);
    padding-top: 120px;
    overflow-x: hidden;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    transition: background-color 0.3s ease, color 0.3s ease;
    background-image: 
        url("data:image/svg+xml,%3Csvg width='300' height='300' viewBox='0 0 300 300' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10,10 Q100,50 150,150 T50,290' fill='none' stroke='%234CAF50' stroke-width='3' stroke-dasharray='10,10' opacity='0.6'/%3E%3C/svg%3E"),
        url("data:image/svg+xml,%3Csvg width='200' height='400' viewBox='0 0 200 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M190,10 Q50,150 150,300' fill='none' stroke='%232196F3' stroke-width='3' stroke-dasharray='12,12' opacity='0.5'/%3E%3C/svg%3E"),
        url("data:image/svg+xml,%3Csvg width='100' height='100' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='50' cy='50' r='40' fill='%23FF9F9F' opacity='0.3'/%3E%3C/svg%3E"),
        url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 0 L60 20 L80 10 L70 30 L90 40 L70 50 L90 60 L70 70 L80 90 L60 80 L50 100 L40 80 L20 90 L30 70 L10 60 L30 50 L10 40 L30 30 L10 10 L30 20 Z' fill='%23FFC371' opacity='0.5'/%3E%3C/svg%3E"),
        url("data:image/svg+xml,%3Csvg width='120' height='40' viewBox='0 0 120 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 20 L10 0 L30 40 L50 0 L70 40 L90 0 L110 40' fill='none' stroke='%23C5A3FF' stroke-width='4' opacity='0.6'/%3E%3C/svg%3E"),
        url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='30,5 5,55 55,55' fill='%2395E1D3' opacity='0.4'/%3E%3C/svg%3E"),
        url("data:image/svg+xml,%3Csvg width='50' height='50' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='25' cy='25' r='20' stroke='%23FFD54F' stroke-width='8' fill='none' opacity='0.4'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: left -50px top 120px, right -20px top 300px, left 50px bottom 50px, right 30px top 100px, right 80px bottom 100px, left 80px top 400px, center top 150px;
    background-size: 400px, 500px, 150px, 100px, 120px, 60px, 50px;
    background-attachment: fixed;
}

h1, h2, h3, h4, h5, .navbar-brand, .btn, .nav-link { 
    font-family: var(--font-heading); 
    color: var(--text-dark);
}

.navbar-custom {
    background-color: rgba(255, 251, 240, 0.95);
    padding: 0;
    transition: all 0.3s;
    border-bottom: 2px solid var(--border-calm); 
    height: 90px;
}

.navbar-brand-centered {
    background-color: var(--accent-orange);
    color: var(--text-dark) !important;
    font-weight: 700;
    font-size: 1.6rem;
    padding: 15px 40px 10px 40px; 
    border-radius: 0 0 30px 30px;
    margin-top: -5px;
    transition: 0.3s;
    text-decoration: none;
    display: flex; align-items: center; justify-content: center; gap: 15px; 
    border: 2px solid white; 
    box-shadow: 0 4px 10px rgba(0,0,0,0.1); 
}
.navbar-brand-centered:hover { padding-top: 25px; }

.navbar-logo-img { height: 55px; width: auto; object-fit: contain; }

.nav-link { 
    font-weight: 600; color: var(--text-dark) !important; font-size: 1rem; 
    margin: 0 15px; text-transform: uppercase; letter-spacing: 0.5px; transition: 0.2s;
}
.nav-link:hover { color: var(--accent-orange) !important; transform: translateY(-2px); }
.nav-link.active { color: var(--accent-orange) !important; }

.dropdown-menu {
    border: 2px solid var(--border-calm); border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05); background: #ffffff; margin-top: 15px;
}
.dropdown-item { font-weight: 600; color: var(--text-dark); padding: 8px 20px; }
.dropdown-item:hover { background-color: var(--accent-green); color: white; }

.btn-fun {
    display: inline-block; font-family: var(--font-heading); font-weight: 700;
    text-decoration: none; color: var(--text-dark); background-color: var(--accent-orange);
    border: 2px solid white; border-radius: 50px; padding: 12px 35px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: all 0.2s ease;
}
.btn-fun:hover { transform: translate(2px, 2px); background-color: #ffcd85; color: var(--text-dark); box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
.btn-fun-outline { background-color: #ffffff; border: 2px solid var(--border-calm); }
.btn-fun-lg { font-size: 1.3rem; padding: 15px 45px; }

.cta-box {
    background-color: #B3E5FC; border: 2px solid white; 
    border-radius: 40px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); padding: 3rem !important;
}

.site-footer { 
    margin-top: auto; padding: 60px 0; background-color: #fff8e1; border-top: 2px solid var(--border-calm);
}

@media (max-width: 1199.98px) {
    .navbar-collapse {
        background-color: rgba(255, 251, 240, 0.98); padding: 20px; border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-top: 15px; border: 2px solid var(--border-calm);
    }
    .nav-link { margin: 10px 0; }
    .navbar-nav .ms-lg-3 { justify-content: flex-start !important; margin-left: 0 !important; margin-top: 15px !important; }
}

body.dark-mode { background-color: #1a1a2e; color: #ffffff !important; }

body.dark-mode h1, body.dark-mode h2, body.dark-mode h3, body.dark-mode h4, body.dark-mode h5, body.dark-mode h6,
body.dark-mode p, body.dark-mode .text-muted, body.dark-mode .small, body.dark-mode li { color: #ffffff !important; }

body.dark-mode .navbar-custom { background-color: #1a1a2e; border-bottom: 1px solid rgba(255,255,255,0.1); }
body.dark-mode .nav-link { color: #ffffff !important; }
body.dark-mode .navbar-brand-centered {
    border: 2px solid #ffffff; border-top: none; box-shadow: 0 6px 0 #ffffff;
    background-color: #1a1a2e; color: var(--accent-orange) !important;
}

@media (max-width: 1199.98px) {
    body.dark-mode .navbar-collapse { background-color: #1a1a2e; border-color: rgba(255,255,255,0.2); }
}

body.dark-mode .btn-outline-dark { color: #ffffff !important; border-color: #ffffff !important; background-color: transparent !important; }
body.dark-mode .btn-outline-dark:hover { background-color: #ffffff !important; color: #1a1a2e !important; }

body.dark-mode .card-organic, body.dark-mode .photo-card, body.dark-mode .dropdown-menu, 
body.dark-mode .modal-content, body.dark-mode .coming-soon-card, body.dark-mode .cta-box,
body.dark-mode .bg-white, body.dark-mode .bg-light, body.dark-mode .card {
    background-color: #ffffff !important; color: #d97706 !important; border-color: #d97706 !important;
    box-shadow: 0 6px 0 #d97706 !important;
}

body.dark-mode .card-organic *, body.dark-mode .photo-card *, body.dark-mode .dropdown-menu *, 
body.dark-mode .modal-content *, body.dark-mode .coming-soon-card *, body.dark-mode .cta-box *,
body.dark-mode .card h1, body.dark-mode .card h2, body.dark-mode .card h3, body.dark-mode .card h4,
body.dark-mode .card h5, body.dark-mode .card p, body.dark-mode .card li { color: #d97706 !important; }

body.dark-mode .card-organic .btn, body.dark-mode .modal-content .btn, body.dark-mode .cta-box .btn {
    color: #1a1a2e !important; border-color: #1a1a2e !important; box-shadow: 0 4px 0 #1a1a2e !important;
}

body.dark-mode .btn-fun { border-color: #ffffff; box-shadow: 0 6px 0 #ffffff; color: #1a1a2e !important; }
body.dark-mode .btn-fun-outline { background-color: #1a1a2e; color: #ffffff !important; }
body.dark-mode .site-footer { background-color: #16213e; border-top: 1px solid rgba(255,255,255,0.1); color: #d1d5db; }
</style>
</head>

<body>

<nav class="navbar navbar-expand-xl navbar-custom fixed-top">
<div class="container-fluid px-lg-5">
    <a class="navbar-brand d-xl-none" href="index.php">
        <img src="images/logo.png" alt="Logo" style="height: 40px; width: auto;" class="me-2">
        Bread of Life
    </a>

    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse">
        <span class="bi bi-list fs-1 text-dark"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navCollapse">
        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item"><a class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" href="index.php"><?php echo t('nav_home'); ?></a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo $current_page == 'gallery.php' ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                    <?php echo t('nav_gallery'); ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="gallery.php?tab=academic"><?php echo t('nav_academic'); ?></a></li>
                    <li><a class="dropdown-item" href="gallery.php?tab=skill"><?php echo t('nav_skill'); ?></a></li>
                </ul>
            </li>
        </ul>

        <a class="navbar-brand-centered d-none d-xl-flex" href="index.php">
            <img src="images/logo.png" alt="Logo PKBM" class="navbar-logo-img">
            <div class="d-flex flex-column text-start justify-content-center">
                <span style="line-height: 1;">PKBM Bread of Life</span>
                <span style="font-size: 1.3rem; font-family: var(--font-script); font-weight: 500; line-height: 1; margin-top: 0px;">Nurture Together, Grow Together</span>
            </div>
        </a>

        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo in_array($current_page, ['school-rules.php', 'parents-guidelines.php', 'tutors-guidelines.php']) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                    <?php echo t('nav_rules'); ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="school-rules.php"><?php echo t('nav_school_rules'); ?></a></li>
                    <li><a class="dropdown-item" href="parents-guidelines.php"><?php echo t('nav_parents_guidelines'); ?></a></li>
                    <li><a class="dropdown-item" href="tutors-guidelines.php"><?php echo t('nav_tutors_guidelines'); ?></a></li>
                </ul>
            </li>

            <li class="nav-item ms-lg-3 d-flex gap-2 mt-3 mt-lg-0">
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-dark rounded-pill fw-bold" data-bs-toggle="dropdown">
                        <i class="bi bi-globe"></i> <?php echo $_SESSION['lang'] == 'en' ? 'EN' : 'ID'; ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" style="min-width: auto;">
                        <li><a class="dropdown-item" href="lang.php?lang=id">ID</a></li>
                        <li><a class="dropdown-item" href="lang.php?lang=en">EN</a></li>
                    </ul>
                </div>
                <button id="darkToggle" class="btn btn-sm btn-outline-dark rounded-circle"><i class="bi bi-moon-stars"></i></button>
            </li>
        </ul>
    </div>
</div>
</nav>

<main>
