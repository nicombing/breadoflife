</main>

<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <h4 class="fw-bold mb-3">PKBM Bread of Life</h4>
                <p class="small opacity-75 text-muted"><?php echo t('footer_desc'); ?></p>
            </div>
            <div class="col-lg-3">
                <h5 class="fw-bold mb-3"><?php echo t('footer_menu'); ?></h5>
                <ul class="list-unstyled">
                    <li><a href="gallery.php" class="text-decoration-none text-muted"><?php echo t('nav_gallery'); ?></a></li>
                    <li><a href="school-rules.php" class="text-decoration-none text-muted"><?php echo t('nav_rules'); ?></a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5 class="fw-bold mb-3"><?php echo t('footer_contact'); ?></h5>
                <p class="small mb-1 text-muted"><i class="bi bi-geo-alt-fill me-2"></i> Tangerang, Indonesia</p>
                <p class="small text-muted mb-3"><i class="bi bi-envelope-fill me-2"></i> pkbmbolhs@gmail.com</p>
                <div class="d-flex flex-column gap-2">
                    <a href="https://wa.me/6281387437288" target="_blank" class="btn btn-success btn-sm rounded-pill fw-bold px-3 py-2 text-start">
                        <i class="bi bi-whatsapp me-2"></i> <?php echo t('footer_admin1'); ?>
                    </a>
                    <a href="https://wa.me/6281253031900" target="_blank" class="btn btn-success btn-sm rounded-pill fw-bold px-3 py-2 text-start">
                        <i class="bi bi-whatsapp me-2"></i> <?php echo t('footer_admin2'); ?>
                    </a>
                    <a href="https://wa.me/6281324683122" target="_blank" class="btn btn-success btn-sm rounded-pill fw-bold px-3 py-2 text-start">
                        <i class="bi bi-wallet2 me-2"></i> <?php echo t('footer_treasurer'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 pt-3 border-top border-secondary border-opacity-25 small text-muted">
            &copy; 2026 PKBM Bread of Life. <?php echo t('footer_rights'); ?>.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
const toggle = document.getElementById('darkToggle');
const icon = toggle.querySelector('i');

function updateIcon(isDark) {
    if(isDark) {
        icon.classList.remove('bi-moon-stars'); 
        icon.classList.add('bi-sun-fill');
        document.querySelector('.navbar-toggler span').classList.remove('text-dark');
        document.querySelector('.navbar-toggler span').classList.add('text-white');
    } else {
        icon.classList.remove('bi-sun-fill'); 
        icon.classList.add('bi-moon-stars');
        document.querySelector('.navbar-toggler span').classList.remove('text-white');
        document.querySelector('.navbar-toggler span').classList.add('text-dark');
    }
}

if(localStorage.getItem('darkMode') === 'on'){ 
    document.body.classList.add('dark-mode'); 
    updateIcon(true);
}

toggle.onclick = () => {
    document.body.classList.toggle('dark-mode');
    const isDark = document.body.classList.contains('dark-mode');
    localStorage.setItem('darkMode', isDark ? 'on' : 'off');
    updateIcon(isDark);
};
</script>

</body>
</html>
