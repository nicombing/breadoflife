<?php
session_start();
require_once 'includes/lang.php';
$page_title = 'Home';
?>
<?php include 'includes/header.php'; ?>

<style>
    .bg-slogan-container {
        position: absolute; top: 110px; left: 50%; transform: translateX(-50%);
        text-align: center; width: 100%; z-index: -1; opacity: 0.8; pointer-events: none;
    }
    .bg-slogan-text {
        font-family: 'Fredoka', sans-serif; font-size: 1.5rem; color: #2ECC71; transform: rotate(-2deg); display: inline-block;
    }
    .blob-pink { background-color: #FF9F9F; border-radius: 45% 55% 40% 60% / 50% 60% 40% 50%; overflow: hidden; padding: 10px; transition: transform 0.3s; }
    .blob-pink:hover { transform: scale(1.05) rotate(-2deg); }
    .blob-purple { background-color: #C5A3FF; border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; overflow: hidden; padding: 15px; transition: transform 0.3s; }
    .blob-purple:hover { transform: scale(1.05) rotate(2deg); }
    .blob-orange { background-color: #FFC371; border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; overflow: hidden; padding: 10px; transition: transform 0.3s; }
    .blob-orange:hover { transform: scale(1.05); }
    .blob-img { width: 100%; height: 320px; object-fit: cover; border-radius: inherit; }

    .card-organic {
        border: 2px solid var(--text-dark); border-radius: 20px 20px 20px 0px; padding: 30px;
        background: white; box-shadow: 6px 6px 0px rgba(0,0,0,0.1); transition: 0.3s; height: 100%;
    }
    .card-organic:hover { transform: translateY(-5px); box-shadow: 8px 8px 0px var(--text-dark); }
    .bg-card-blue { background-color: #E0F7FA !important; }
    .bg-card-pink { background-color: #F8BBD0 !important; }
    .bg-card-yellow { background-color: #FFF9C4 !important; }

    .program-card {
        border: 2px solid var(--text-dark); border-radius: 25px; overflow: hidden;
        background: white; box-shadow: 6px 6px 0px rgba(0,0,0,0.1); transition: 0.3s;
        height: 100%; display: flex; flex-direction: column;
    }
    .program-card:hover { transform: translateY(-5px); box-shadow: 8px 8px 0px var(--text-dark); }
    .program-img-container { height: 200px; overflow: hidden; position: relative; }
    .program-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
    .program-card:hover .program-img { transform: scale(1.1); }
    .program-body { padding: 25px; flex-grow: 1; display: flex; flex-direction: column; }

    .highlight { position: relative; z-index: 1; }
    .highlight::after {
        content: ""; position: absolute; bottom: 5px; left: 0; width: 100%; height: 10px;
        background-color: #FFC371; z-index: -1; transform: rotate(-1deg); opacity: 0.7;
    }

    .photo-card {
        border: 3px solid var(--text-dark); border-radius: 20px; overflow: hidden;
        box-shadow: 6px 6px 0px rgba(0,0,0,0.1); transition: transform 0.2s; background: white; height: 100%;
    }
    .photo-card:hover { transform: translateY(-5px); box-shadow: 8px 8px 0px var(--text-dark); }
</style>

<section class="container py-5">
    <div class="row align-items-center justify-content-center g-4 mb-5">
        <div class="col-md-4"><div class="blob-pink mx-auto" style="max-width: 320px;"><img src="images/hero/siswa-1.jpg" alt="Student" class="blob-img" onerror="this.src='https://placehold.co/400x320?text=Student'"></div></div>
        <div class="col-md-4 mt-5 mt-md-0"><div class="blob-purple mx-auto" style="max-width: 320px;"><img src="images/hero/siswa-2.jpg" alt="Learning" class="blob-img" onerror="this.src='https://placehold.co/400x320?text=Learning'"></div></div>
        <div class="col-md-4"><div class="blob-orange mx-auto" style="max-width: 320px;"><img src="images/hero/siswa3.jpg" alt="Happy" class="blob-img" onerror="this.src='https://placehold.co/400x320?text=Happy'"></div></div>
    </div>

    <div class="row mt-5 text-center text-lg-start align-items-center">
        <div class="col-lg-7">
            <h1 class="display-3 fw-bold mb-3" style="line-height: 1.1;"><?php echo t('hero_title'); ?></h1>
            <p class="fs-5 text-muted mt-3 mb-4"><?php echo t('hero_desc'); ?></p>
            <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                <a href="https://forms.gle/G6LWLY7nU5UwUpHH7" target="_blank" class="btn-fun"><?php echo t('hero_register'); ?></a>
                <a href="gallery.php" class="btn-fun btn-fun-outline"><?php echo t('hero_gallery'); ?></a>
            </div>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0 text-center d-none d-lg-block"></div>
    </div>
</section>

<section id="about" class="container py-5 my-5">
    <div class="text-center mb-5 mx-auto" style="max-width: 800px;">
        <span class="badge bg-warning text-dark border border-dark px-3 py-2 rounded-pill mb-3"><?php echo t('about_badge'); ?></span>
        <h2 class="fw-bold mb-4"><?php echo t('about_title'); ?></h2>
        <p class="text-muted fs-5"><?php echo t('about_desc'); ?></p>
    </div>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card-organic bg-card-blue">
                <h3 class="fw-bold mb-3"><?php echo t('mission_title'); ?></h3>
                <p class="text-muted"><?php echo t('mission_desc'); ?></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-organic bg-card-yellow" style="border-radius: 20px 20px 0 20px;">
                <h3 class="fw-bold mb-3"><?php echo t('model_title'); ?></h3>
                <p class="text-muted"><?php echo t('model_desc'); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="programs" class="container py-5">
    <div class="text-center mb-5"><h2 class="fw-bold display-5"><?php echo t('programs_title'); ?></h2><p class="text-muted"><?php echo t('programs_subtitle'); ?></p></div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-img-container">
                    <img src="images/programs/sd.jpg" alt="SD" class="program-img" onerror="this.src='https://placehold.co/600x400?text=SD'">
                    <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 rounded-top-end fw-bold border-top border-end border-dark">🎒 Elementary</div>
                </div>
                <div class="program-body" style="background-color: #FFCDD2;">
                    <h3 class="fw-bold"><?php echo t('package_a'); ?></h3>
                    <p class="text-muted mb-0"><?php echo t('package_a_desc'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-img-container">
                    <img src="images/programs/smp.jpg" alt="SMP" class="program-img" onerror="this.src='https://placehold.co/600x400?text=SMP'">
                    <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 rounded-top-end fw-bold border-top border-end border-dark">🔬 Junior High</div>
                </div>
                <div class="program-body" style="background-color: #E1BEE7;">
                    <h3 class="fw-bold"><?php echo t('package_b'); ?></h3>
                    <p class="text-muted mb-0"><?php echo t('package_b_desc'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="program-card">
                <div class="program-img-container">
                    <img src="images/programs/sma.jpg" alt="SMA" class="program-img" onerror="this.src='https://placehold.co/600x400?text=SMA'">
                    <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 rounded-top-end fw-bold border-top border-end border-dark">🎓 Senior High</div>
                </div>
                <div class="program-body" style="background-color: #C8E6C9;">
                    <h3 class="fw-bold"><?php echo t('package_c'); ?></h3>
                    <p class="text-muted mb-0"><?php echo t('package_c_desc'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5"><h2 class="fw-bold display-5"><?php echo t('gallery_preview_title'); ?></h2><p class="text-muted"><?php echo t('gallery_preview_subtitle'); ?></p></div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="photo-card">
                <img src="images/gallery/grade-1.jpg" alt="Grade 1" style="width: 100%; height: 250px; object-fit: cover;" onerror="this.src='https://placehold.co/400x300?text=Grade+1'">
                <div class="p-3 text-center border-top border-2 border-dark"><h5 class="fw-bold mb-0"><?php echo t('grade_1'); ?> Kegiatan Kelas</h5></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="photo-card">
                <img src="images/gallery/grade-2.jpg" alt="Grade 2" style="width: 100%; height: 250px; object-fit: cover;" onerror="this.src='https://placehold.co/400x300?text=Grade+2'">
                <div class="p-3 text-center border-top border-2 border-dark"><h5 class="fw-bold mb-0"><?php echo t('grade_2'); ?> Kegiatan Kelas</h5></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="photo-card">
                <img src="images/gallery/grade-3.jpg" alt="Grade 3" style="width: 100%; height: 250px; object-fit: cover;" onerror="this.src='https://placehold.co/400x300?text=Grade+3'">
                <div class="p-3 text-center border-top border-2 border-dark"><h5 class="fw-bold mb-0"><?php echo t('grade_3'); ?> Kegiatan Kelas</h5></div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5"><a href="gallery.php" class="btn-fun btn-fun-outline"><?php echo t('gallery_view_all'); ?> <i class="bi bi-arrow-right ms-2"></i></a></div>
</section>

<section class="container py-5 my-5">
    <div class="text-center cta-box">
        <h2 class="fw-bold display-5 mb-3"><?php echo t('cta_title'); ?></h2>
        <p class="fs-5 mb-4 mx-auto" style="max-width: 600px;"><?php echo t('cta_desc'); ?></p>
        <a href="https://forms.gle/G6LWLY7nU5UwUpHH7" target="_blank" class="btn-fun btn-fun-lg"><?php echo t('cta_register'); ?></a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
