<?php
session_start();
require_once 'includes/lang.php';
$page_title = 'Gallery';
$active_tab = $_GET['tab'] ?? 'academic';
?>
<?php include 'includes/header.php'; ?>

<style>
    .photo-card {
        border: 3px solid var(--text-dark); border-radius: 20px; overflow: hidden;
        box-shadow: 6px 6px 0px rgba(0,0,0,0.1); transition: transform 0.2s;
        background: white; height: 100%;
    }
    .photo-card:hover { transform: translateY(-5px); box-shadow: 8px 8px 0px var(--text-dark); }
    .blob-img-gallery { height: 250px; object-fit: cover; width: 100%; cursor: pointer; transition: filter 0.3s; }
    .blob-img-gallery:hover { filter: brightness(0.9); }
    .no-student-img { height: 250px; background-color: #e0e0e0; display: flex; align-items: center; justify-content: center; color: #757575; font-weight: bold; font-size: 1.2rem; text-align: center; flex-direction: column; }
    .section-badge { display: inline-block; border: 2px solid var(--text-dark); padding: 10px 30px; border-radius: 50px; font-weight: bold; box-shadow: 4px 4px 0px var(--text-dark); margin-bottom: 30px; font-size: 1.2rem; }
    .coming-soon-card { background: #FFF9C4; border: 3px dashed var(--text-dark); border-radius: 20px; height: 300px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: 0.3s; position: relative; overflow: hidden; }
    .coming-soon-card:hover { background: #FFF59D; transform: scale(1.02); }
    .nav-pills .nav-link { color: var(--text-dark); font-weight: bold; border-radius: 50px; padding: 10px 30px; border: 2px solid transparent; }
    .nav-pills .nav-link.active { background-color: var(--accent-orange); color: var(--text-dark); border: 2px solid var(--text-dark); box-shadow: 4px 4px 0px var(--text-dark); }
</style>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold"><?php echo t('gallery_title'); ?></h1>
        <p class="fs-5 text-muted"><?php echo t('gallery_subtitle'); ?></p>
    </div>

    <ul class="nav nav-pills justify-content-center mb-5 gap-3" id="galleryTab" role="tablist">
        <li class="nav-item"><button class="nav-link <?php echo $active_tab == 'academic' ? 'active' : ''; ?>" id="academic-tab" data-bs-toggle="pill" data-bs-target="#academic" type="button">🎓 <?php echo t('tab_academic'); ?></button></li>
        <li class="nav-item"><button class="nav-link <?php echo $active_tab == 'skill' ? 'active' : ''; ?>" id="skill-tab" data-bs-toggle="pill" data-bs-target="#skill" type="button">🎨 <?php echo t('tab_skill'); ?></button></li>
    </ul>

    <div class="tab-content" id="galleryTabContent">
        <div class="tab-pane fade <?php echo $active_tab == 'academic' ? 'show active' : ''; ?>" id="academic" role="tabpanel">
            <div class="text-center mt-4"><div class="section-badge bg-info text-white"><?php echo t('elem_badge'); ?> (<?php echo t('grade_1'); ?> - <?php echo t('grade_6'); ?>)</div></div>
            <div class="row g-4 mb-5 justify-content-center">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="photo-card">
                        <?php if ($i <= 5): ?>
                        <img src="images/gallery/grade-<?php echo $i; ?>.jpg" class="blob-img-gallery" alt="Grade <?php echo $i; ?>" data-bs-toggle="modal" data-bs-target="#imagePreviewModal" onclick="showImage(this)" onerror="this.src='https://placehold.co/400x300/png?text=Grade+<?php echo $i; ?>'">
                        <?php else: ?>
                        <div class="no-student-img"><i class="bi bi-person-x-fill fs-1 mb-2"></i><span><?php echo t('no_student'); ?></span></div>
                        <?php endif; ?>
                        <div class="p-3 text-center fw-bold" style="background: #E0F7FA;">Kelas <?php echo $i; ?></div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>

            <div class="text-center mt-5"><div class="section-badge bg-success text-white"><?php echo t('jr_badge'); ?> (<?php echo t('grade_7'); ?> - <?php echo t('grade_9'); ?>)</div></div>
            <div class="row g-4 mb-5 justify-content-center">
                <?php for ($i = 7; $i <= 9; $i++): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="photo-card">
                        <img src="images/gallery/grade-<?php echo $i; ?>.jpg" class="blob-img-gallery" alt="Grade <?php echo $i; ?>" data-bs-toggle="modal" data-bs-target="#imagePreviewModal" onclick="showImage(this)" onerror="this.src='https://placehold.co/400x300/png?text=Grade+<?php echo $i; ?>'">
                        <div class="p-3 text-center fw-bold" style="background: #E8F5E9;">Kelas <?php echo $i; ?></div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>

            <div class="text-center mt-5"><div class="section-badge bg-danger text-white"><?php echo t('sr_badge'); ?> (<?php echo t('grade_7'); ?> - <?php echo t('grade_9'); ?>)</div></div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <div class="coming-soon-card" data-bs-toggle="modal" data-bs-target="#comingSoonSMAModal">
                        <div class="coming-soon-content text-center p-4">
                            <div style="font-size: 4rem;">🚧🏗️</div>
                            <h3 class="fw-bold text-dark mt-2"><?php echo t('coming_soon'); ?></h3>
                            <p class="text-dark fs-5 mb-0"><?php echo t('coming_soon_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade <?php echo $active_tab == 'skill' ? 'show active' : ''; ?>" id="skill" role="tabpanel">
            <div class="text-center mt-4"><div class="section-badge bg-warning text-dark"><?php echo t('skill_special'); ?></div></div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="photo-card">
                        <img src="images/gallery/cooking.jpg" class="blob-img-gallery" alt="<?php echo t('skill_cooking'); ?>" data-bs-toggle="modal" data-bs-target="#imagePreviewModal" onclick="showImage(this)" onerror="this.src='https://placehold.co/400x300/png?text=Cooking'">
                        <div class="p-3 text-center fw-bold bg-white border-top border-dark"><?php echo t('skill_cooking'); ?></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="photo-card">
                        <img src="images/gallery/students-worship.jpg" class="blob-img-gallery" alt="<?php echo t('skill_worship'); ?>" data-bs-toggle="modal" data-bs-target="#imagePreviewModal" onclick="showImage(this)" onerror="this.src='https://placehold.co/400x300/png?text=Worship'">
                        <div class="p-3 text-center fw-bold bg-white border-top border-dark"><?php echo t('skill_worship'); ?></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="photo-card">
                        <img src="images/gallery/group-activities.jpg" class="blob-img-gallery" alt="<?php echo t('skill_group'); ?>" data-bs-toggle="modal" data-bs-target="#imagePreviewModal" onclick="showImage(this)" onerror="this.src='https://placehold.co/400x300/png?text=Group'">
                        <div class="p-3 text-center fw-bold bg-white border-top border-dark"><?php echo t('skill_group'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="comingSoonSMAModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border: 3px solid var(--text-dark); border-radius: 25px; background: #FFFBF0;">
            <div class="modal-header border-0 pb-0"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
            <div class="modal-body text-center px-5 pb-5 pt-0">
                <div style="font-size: 5rem;" class="mb-3">📣</div>
                <h2 class="fw-bold mb-4"><?php echo t('sma_info'); ?></h2>
                <div class="alert alert-warning border-2 border-dark text-dark fw-bold" style="border-radius: 15px;"><i class="bi bi-info-circle-fill me-2"></i> <?php echo t('sma_info_desc'); ?></div>
                <button type="button" class="btn btn-fun mt-4" data-bs-dismiss="modal"><?php echo t('sma_ok'); ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"> 
        <div class="modal-content bg-transparent border-0 shadow-none">
            <div class="modal-body p-0 position-relative text-center">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3 bg-dark p-2 rounded-circle border border-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="" id="fullImage" class="img-fluid rounded-4 shadow-lg" style="border: 4px solid white; max-height: 85vh;">
                <div class="mt-3"><span id="imageCaption" class="badge bg-dark text-white fs-5 px-4 py-2 border border-white rounded-pill"></span></div>
            </div>
        </div>
    </div>
</div>

<script>
    function showImage(imgElement) {
        var src = imgElement.getAttribute('src');
        var alt = imgElement.getAttribute('alt');
        document.getElementById('fullImage').setAttribute('src', src);
        document.getElementById('imageCaption').innerText = alt;
    }
</script>

<?php include 'includes/footer.php'; ?>
